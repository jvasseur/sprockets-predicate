<?php

declare(strict_types=1);

namespace Sprockets\Predicate\Tests;

use PHPUnit\Framework\TestCase;

use function Sprockets\Predicate\all;

final class AllTest extends TestCase
{
    public function testAll(): void
    {
        $all = all(
            fn ($value) => ($value % 2) === 0,
            fn ($value) => ($value % 3) === 0,
        );

        $this->assertTrue($all(0));
        $this->assertFalse($all(2));
    }
}
