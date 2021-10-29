<?php

declare(strict_types=1);

namespace Sprokets\Predicate;

/**
 * @template T of object
 */
class Property
{
    public readonly string $property;

    /**
     * @var callable(T): bool
     */
    public readonly mixed $predicate;

    /**
     * @param callable(T): bool $predicate
     */
    public function __construct(string $property, callable $predicate)
    {
        $this->property = $property;
        $this->predicate = $predicate;
    }

    /**
     * @param T $value
     */
    final public function __invoke(object $value): bool
    {
        return ($this->predicate)($value->{$this->property});
    }
}
