<?php

use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;
use Monolog\Logger as MonoLog;
use Lento\Logging\Logger;

$handler = new StreamHandler('php://stdout', MonoLog::DEBUG);
$handler->setFormatter(new LineFormatter("%channel% - %level_name%: %message%\n"));
Logger::addMono('stdout', $handler, ['info', 'error', 'debug', 'alert']);