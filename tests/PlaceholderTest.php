<?php

declare(strict_types=1);

namespace Gamez\Clock\Tests;

use Gamez\Clock\Placeholder;
use PHPUnit\Framework\TestCase;

final class PlaceholderTest extends TestCase
{
    private Placeholder $placeholder;

    protected function setUp(): void
    {
        $this->placeholder = new Placeholder('Jérôme Gamez says: ');
    }

    public function testItEchoesAValue(): void
    {
        self::assertSame('Jérôme Gamez says: Hello', $this->placeholder->echo('Hello'));
    }
}
