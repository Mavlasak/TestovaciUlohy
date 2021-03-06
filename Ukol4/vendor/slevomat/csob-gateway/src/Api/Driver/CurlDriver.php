<?php declare(strict_types = 1);

namespace SlevomatCsobGateway\Api\Driver;

use SlevomatCsobGateway\Api\ApiClientDriver;
use SlevomatCsobGateway\Api\HttpMethod;
use SlevomatCsobGateway\Api\Response;
use SlevomatCsobGateway\Api\ResponseCode;

class CurlDriver implements ApiClientDriver
{

	/** @var int */
	private $timeout = 20;

	/**
	 * @param HttpMethod $method
	 * @param string $url
	 * @param mixed[]|null $data
	 * @param string[] $headers
	 * @return Response
	 * @throws CurlDriverException
	 */
	public function request(HttpMethod $method, string $url, array $data = null, array $headers = []): Response
	{
		$ch = curl_init($url);

		if ($method->equalsValue(HttpMethod::POST) || $method->equalsValue(HttpMethod::PUT)) {
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method->getValue());
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		}

		curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers + [
				'Content-Type: application/json',
			]);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		$output = curl_exec($ch);

		if ($output === false) {
			throw new CurlDriverException($ch);
		}

		$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
		$headers = substr($output, 0, $headerSize);
		$body = substr($output, $headerSize);

		$responseCode = new ResponseCode(curl_getinfo($ch, CURLINFO_HTTP_CODE));

		curl_close($ch);

		return new Response(
			$responseCode,
			json_decode($body, true),
			$this->parseHeaders($headers)
		);
	}

	/**
	 * @param string $rawHeaders
	 * @return string[]
	 */
	private function parseHeaders(string $rawHeaders): array
	{
		$headers = [];

		foreach (explode("\n", $rawHeaders) as $line) {
			$line = explode(':', $line, 2);

			if (isset($line[1])) {
				$headers[$line[0]] = trim($line[1]);
			}
		}

		return $headers;
	}

}
