<?php

declare(strict_types=1);

namespace Sprokets\Predicate;

/**
 * @template T
 */
class Equals
{
    public readonly mixed $value;

    public function __construct(mixed $value)
    {
        $this->value = $value;
    }

    /**
     * @param T $value
     */
    final public function __invoke(mixed $value): bool
    {
        return $value === $this->value;
    }
}
