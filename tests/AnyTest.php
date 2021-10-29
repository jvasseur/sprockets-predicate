<?php

declare(strict_types=1);

namespace Sprokets\Predicate\Tests;

use PHPUnit\Framework\TestCase;

use function Sprokets\Predicate\any;

final class AnyTest extends TestCase
{
    public function testAny(): void
    {
        $any = any(
            fn ($value) => ($value % 2) === 0,
            fn ($value) => ($value % 3) === 0,
        );

        $this->assertTrue($any(0));
        $this->assertFalse($any(1));
        $this->assertTrue($any(2));
    }
}
