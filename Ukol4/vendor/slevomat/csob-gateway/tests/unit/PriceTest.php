<?php declare(strict_types = 1);

namespace SlevomatCsobGateway;

class PriceTest extends \PHPUnit_Framework_TestCase
{

	public function testGetters()
	{
		$cartItem = new Price(123, new Currency(Currency::USD));

		$this->assertSame(123, $cartItem->getAmount());
		$this->assertSame(Currency::USD, $cartItem->getCurrency()->getValue());
	}

}
