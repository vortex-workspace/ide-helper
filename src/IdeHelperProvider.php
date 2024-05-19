<?php

namespace IdeHelper;

use IdeHelper\Commands\IdeAdapter;
use Stellar\Provider;

class IdeHelperProvider extends Provider
{
    public static function commands(): array
    {
        return [
            IdeAdapter::class,
        ];
    }
}