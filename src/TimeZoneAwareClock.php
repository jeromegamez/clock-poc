<?php

declare(strict_types=1);

namespace Gamez\Clock;

use Safe\DateTimeImmutable;
use DateTimeZone;

final class TimeZoneAwareClock implements Clock
{
    private DateTimeZone $timeZone;

    public function __construct(DateTimeZone $timeZone)
    {
        $this->timeZone = $timeZone;
    }

    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable('now', $this->timeZone);
    }
}
