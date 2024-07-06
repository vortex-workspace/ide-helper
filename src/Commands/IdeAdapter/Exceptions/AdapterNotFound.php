<?php

namespace IdeHelper\Commands\IdeAdapter\Exceptions;

use Monolog\Level;
use Stellar\Throwable\Exceptions\Contracts\Exception;
use Stellar\Throwable\Exceptions\Enum\ExceptionCode;

class AdapterNotFound extends Exception
{
    public function __construct(string $adapter)
    {
        parent::__construct(
            "Adapter not found \"$adapter\".",
            ExceptionCode::NON_CATCH_EXCEPTION,
            Level::Error
        );
    }
}