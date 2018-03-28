<?php
namespace AllDigitalRewards\Vendor\Replink\Factory;

use FluentHandler\FluentHandler;
use Monolog\Logger;
use Monolog\Processor\PsrLogMessageProcessor;

class LoggerFactory
{
    /**
     * @var Logger
     */
    private static $logger;

    private function __construct()
    {
        //  Singletons do not like constructors.
    }

    public static function getInstance()
    {
        if (self::$logger === null) {
            $logger = new Logger('Logger');
            $logger->pushHandler(new FluentHandler(null, '35.225.39.223', 5710));
            $logger->pushProcessor(new PsrLogMessageProcessor);
            self::$logger = $logger;
        }

        return self::$logger;
    }
}
