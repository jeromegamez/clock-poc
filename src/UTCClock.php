<?php

declare(strict_types=1);

namespace Gamez\Clock;

use Safe\DateTimeImmutable;
use DateTimeZone;

final class UTCClock implements Clock
{
    private DateTimeZone $utcTimeZone;

    public function __construct()
    {
        $this->utcTimeZone = new DateTimeZone('UTC');
    }

    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable('now', $this->utcTimeZone);
    }
}
