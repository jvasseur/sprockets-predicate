<?php

declare(strict_types=1);

namespace Sprokets\Predicate;

/**
 * @template T
 *
 * @param array<callable(T): bool> ...$predicates
 *
 * @return All<T>
 */
function all(callable ...$predicates): All
{
    return new All(...$predicates);
}

/**
 * @template T
 *
 * @param array<callable(T): bool> ...$predicates
 *
 * @return Any<T>
 */
function any(callable ...$predicates): Any
{
    return new Any(...$predicates);
}

/**
 * @template T
 *
 * @param callable(T): bool $predicate
 *
 * @return Not<T>
 */
function not(callable $predicate): Not
{
    return new Not($predicate);
}

/**
 * @template T of object
 *
 * @param callable(T): bool $predicate
 *
 * @return Property<T>
 */
function property(string $property, callable $predicate): Property
{
    return new Property($property, $predicate);
}

/**
 * @template T
 *
 * @param T $value
 *
 * @return Equals<T>
 */
function equals(mixed $value): Equals
{
    return new Equals($value);
}

/**
 * @template T
 *
 * @param T $value
 *
 * @return LessThan<T>
 */
function lessThan(mixed $value): LessThan
{
    return new LessThan($value);
}

/**
 * @template T
 *
 * @param T $value
 *
 * @return LessThan<T>
 */
function before(mixed $value): LessThan
{
    return new LessThan($value);
}

/**
 * @template T
 *
 * @param T $value
 *
 * @return MoreThan<T>
 */
function moreThan(mixed $value): MoreThan
{
    return new MoreThan($value);
}

/**
 * @template T
 *
 * @param T $value
 *
 * @return MoreThan<T>
 */
function after(mixed $value): MoreThan
{
    return new MoreThan($value);
}
