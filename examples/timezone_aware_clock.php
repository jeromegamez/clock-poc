<?php

require __DIR__.'/../vendor/autoload.php';

use Gamez\Clock;

$utc = new Clock\UTCClock();

$berlin = new Clock\TimeZoneAwareClock(new DateTimeZone('Europe/Berlin'));
$newYork = new Clock\TimeZoneAwareClock(new DateTimeZone('America/New_York'));

dump($berlin->now());
dump($newYork->now());
