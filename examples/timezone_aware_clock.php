<?php

require __DIR__.'/../vendor/autoload.php';

use Gamez\Clock;

$utc = new Clock\UTCClock();

$berlin = new Clock\TimeZoneAwareClock(new DateTimeZone('Europe/Berlin'));
$newYork = new Clock\TimeZoneAwareClock(new DateTimeZone('America/New_York'));

dump($berlin->now());
dump($newYork->now());

dump($berlin->now()->getTimestamp());
dump($newYork->now()->getTimestamp());

/*

❯ php examples/timezone_aware_clock.php
^ Safe\DateTimeImmutable @1615505397^ {#9
  -innerDateTime: DateTimeImmutable @1615505397 {#10
    date: 2021-03-12 00:29:57.265483 Europe/Berlin (+01:00)
  }
  date: 2021-03-12 00:29:57.265483 Europe/Berlin (+01:00)
}
^ Safe\DateTimeImmutable @1615505397^ {#9
  -innerDateTime: DateTimeImmutable @1615505397 {#10
    date: 2021-03-11 18:29:57.270550 America/New_York (-05:00)
  }
  date: 2021-03-11 18:29:57.270550 America/New_York (-05:00)
}
^ 1615505397
^ 1615505397
*/
