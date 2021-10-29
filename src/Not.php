<?php

declare(strict_types=1);

namespace Sprokets\Predicate;

/**
 * @template T
 */
class Not
{
    /**
     * @var callable(T): bool
     */
    public readonly mixed $predicate;

    /**
     * @param callable(T): bool $predicate
     */
    public function __construct(callable $predicate)
    {
        $this->predicate = $predicate;
    }

    /**
     * @param T $value
     */
    final public function __invoke(mixed $value): bool
    {
        return !($this->predicate)($value);
    }
}
