<?php declare(strict_types = 1);

namespace PHPStan;

/**
 * @template T
 * @phpstan-pure
 * @param T $value
 * @return T
 *
 * @throws void
 */
function dumpType($value) // phpcs:ignore Squiz.Functions.GlobalFunction.Found
{
	return $value;
}

/**
 * @template T
 * @phpstan-pure
 * @param T $value
 * @return T
 *
 * @throws void
 */
function dumpPhpDocType($value) // phpcs:ignore Squiz.Functions.GlobalFunction.Found
{
	return $value;
}
