<?php

declare(strict_types=1);

namespace Gamez\Clock;

use Safe\DateTimeImmutable;

final class RandomClock implements Clock
{
    private DateTimeImmutable $from;
    private DateTimeImmutable $until;

    public function __construct(?DateTimeImmutable $from = null, ?DateTimeImmutable $until = null)
    {
        $this->from = $from ?? (new DateTimeImmutable('now', new \DateTimeZone('UTC')))->setTimestamp(0);
        $this->until = $until ?? (new DateTimeImmutable('now', new \DateTimeZone('UTC')));
    }

    public function now(): DateTimeImmutable
    {
        $random = random_int($this->from->getTimestamp(), $this->until->getTimestamp());

        return (new DateTimeImmutable('now', new \DateTimeZone('UTC')))->setTimestamp($random);
    }
}
