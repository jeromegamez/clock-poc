<?php

require __DIR__.'/../vendor/autoload.php';

use Gamez\Clock;

$clock = new Clock\RandomClock();

dump($clock->now());
dump($clock->now());
