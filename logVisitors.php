<?php

namespace App;

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Page Visits');
$log->pushHandler(new StreamHandler('logs/pageVisits.log', Logger::INFO));

// add records to the log
function logVisit($logEntry) 
{
    global $log;
    $log->info($logEntry);
}

?>