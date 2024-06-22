<?php

declare(strict_types=1);

namespace Easing;

/**
 * Collection of easing functions.
 *
 * @see https://github.com/smnandre/easing-functions
 *
 * @author Simon Andre <smn.andre@gmail.com>
 */
final readonly class Functions
{
    public static function easeOutCubic(float $x): float
    {
        return 1 - pow(1 - $x, 3);
    }

    public static function easeInOutCubic(float $x): float
    {
        return $x < 0.5 ? 4 * pow($x, 3) : 1 - pow(-2 * $x + 2, 3) / 2;
    }

    public static function easeInQuart(float $x): float
    {
        return pow($x, 4);
    }

    public static function easeOutQuart(float $x): float
    {
        return 1 - pow(1 - $x, 4);
    }

    public static function easeInOutQuart(float $x): float
    {
        return $x < 0.5 ? 8 * pow($x, 4) : 1 - pow(-2 * $x + 2, 4) / 2;
    }

    public static function easeInCubic(float $x): float
    {
        return pow($x, 3);
    }

    public static function easeInQuad(float $x): float
    {
        return $x * $x;
    }

    public static function easeOutQuad(float $x): float
    {
        return 1 - (1 - $x) * (1 - $x);
    }

    public static function easeInOutQuad(float $x): float
    {
        return $x < 0.5 ? 2 * $x * $x : 1 - pow(-2 * $x + 2, 2) / 2;
    }

}
