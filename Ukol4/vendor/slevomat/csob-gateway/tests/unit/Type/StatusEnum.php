<?php declare(strict_types = 1);

namespace SlevomatCsobGateway\Type;

class StatusEnum extends Enum
{

	const DRAFT = 1;
	const REVIEW = 2;
	const PUBLISHED = 3;

}
