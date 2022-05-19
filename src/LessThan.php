<?php

declare(strict_types=1);

namespace Sprockets\Predicate;

/**
 * @template T
 */
class LessThan
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
        return $value < $this->value;
    }
}
