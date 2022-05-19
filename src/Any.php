<?php

declare(strict_types=1);

namespace Sprockets\Predicate;

/**
 * @template T
 */
class Any
{
    /**
     * @var array<callable(T): bool>
     */
    public readonly array $predicates;

    /**
     * @param array<callable(T): bool> ...$predicates
     */
    public function __construct(callable ...$predicates)
    {
        $this->predicates = $predicates;
    }

    /**
     * @param T $value
     */
    final public function __invoke(mixed $value): bool
    {
        foreach ($this->predicates as $predicate) {
            if ($predicate($value)) {
                return true;
            }
        }

        return false;
    }
}
