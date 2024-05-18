<?php

require_once "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger("AnakOmMamat");
$logger->pushHandler(new StreamHandler(__DIR__ . "/logs/app-log.log", Logger::INFO)); // pushHandler() mendorong log ke dalam file // StreamHandler() initialize lokasi file hasil informasi dan level logging

$logger->info("Hello World"); // info() logging level info // set logging
$logger->info("Selamat Belajar Composer");