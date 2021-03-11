<?php

declare(strict_types=1);

namespace Gamez\Clock;

use Safe\DateTimeImmutable;

final class SystemClock implements Clock
{
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}
