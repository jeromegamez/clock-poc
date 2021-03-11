<?php

require __DIR__.'/../vendor/autoload.php';

use Gamez\Clock;

$clock = new Clock\RandomClock();

dump($clock->now());
dump($clock->now());

/*
❯ php examples/random_clock.php
^ Safe\DateTimeImmutable @976973969^ {#11
  -innerDateTime: DateTimeImmutable @976973969 {#8
    date: 2000-12-16 13:39:29.0 UTC (+00:00)
  }
  date: 2000-12-16 13:39:29.0 UTC (+00:00)
}
^ Safe\DateTimeImmutable @313983011^ {#21
  -innerDateTime: DateTimeImmutable @313983011 {#8
    date: 1979-12-14 01:30:11.0 UTC (+00:00)
  }
  date: 1979-12-14 01:30:11.0 UTC (+00:00)
}
*/
