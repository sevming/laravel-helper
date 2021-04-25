<?php

/**
 * Add two arbitrary precision numbers.
 *
 * @param string $leftOperand
 * @param string $rightOperand
 * @param int    $scale
 *
 * @return string
 */
function math_add($leftOperand, $rightOperand, $scale = 2)
{
    return bcadd($leftOperand, $rightOperand, $scale);
}

/**
 * Subtract one arbitrary precision number from another.
 *
 * @param string $leftOperand
 * @param string $rightOperand
 * @param int    $scale
 *
 * @return string
 */
function math_sub($leftOperand, $rightOperand, $scale = 2)
{
    return bcsub($leftOperand, $rightOperand, $scale);
}

/**
 * Multiply two arbitrary precision numbers.
 *
 * @param string $leftOperand
 * @param string $rightOperand
 * @param int    $scale
 *
 * @return string
 */
function math_mul($leftOperand, $rightOperand, $scale = 2)
{
    return bcmul($leftOperand, $rightOperand, $scale);
}

/**
 * Divide two arbitrary precision numbers.
 *
 * @param string $dividend
 * @param string $divisor
 * @param int    $scale
 *
 * @return string
 */
function math_div($dividend, $divisor, $scale = 2)
{
    return bcdiv($dividend, $divisor, $scale);
}

/**
 * Get modulus of an arbitrary precision number.
 *
 * @param string $dividend
 * @param string $divisor
 * @param int    $scale
 *
 * @return string
 */
function math_mod($dividend, $divisor, $scale = 0)
{
    return bcmod($dividend, $divisor, $scale);
}

/**
 * Raise an arbitrary precision number to another.
 *
 * @param string $base
 * @param string $exponent
 * @param int    $scale
 *
 * @return string
 */
function math_pow($base, $exponent, $scale = 0)
{
    return bcpow($base, $exponent, $scale);
}

/**
 * Get the square root of an arbitrary precision number.
 *
 * @param string $operand
 * @param int    $scale
 *
 * @return string
 */
function math_sqrt($operand, $scale = null)
{
    return bcsqrt($operand, $scale);
}

/**
 * Set default scale parameter for all bc math functions.
 *
 * @param int $scale
 *
 * @return bool
 */
function math_scale($scale)
{
    return bcscale($scale);
}

/**
 * Compare two arbitrary precision numbers.
 *
 * @param string $leftOperand
 * @param string $rightOperand
 * @param int    $scale
 *
 * @return int
 */
function math_comp($leftOperand, $rightOperand, $scale = 2)
{
    return bccomp($leftOperand, $rightOperand, $scale);
}

/**
 * Raise an arbitrary precision number to another, reduced by a specified modulus.
 *
 * @param string $base
 * @param string $exponent
 * @param string $modulus
 * @param int    $scale
 *
 * @return string|null
 */
function math_powmod($base, $exponent, $modulus, $scale = 0)
{
    return bcpowmod($base, $exponent, $modulus, $scale);
}

/**
 * Format a number with grouped thousands.
 *
 * @param mixed $number
 * @param bool  $removeExcessZero
 * @param int   $scale
 *
 * @return string
 */
function math_format($number, $removeExcessZero = false, $scale = 2)
{
    $result = math_add($number, 0, $scale);
    if ($removeExcessZero) {
        $result = strval(floatval($result));
    }

    return $result;
}

/**
 * Returns the rounded value of val to specified precision (number of digits after the decimal point).
 *
 * @param float $val
 * @param int   $precision
 * @param int   $mode
 *
 * @return float|false
 */
function math_round($val, $precision = 2, $mode = PHP_ROUND_HALF_UP)
{
    return round($val, $precision, $mode);
}