<?php

declare(strict_types=1);

namespace Gamez\Clock;

use DateTimeImmutable;

interface Clock
{
    public function now(): DateTimeImmutable;
}
