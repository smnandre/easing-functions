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

    public static function easeOutBounce(float $x): float
    {
        return self::bounceOut($x);
    }

    public static function easeInBounce(float $x): float
    {
        return 1 - self::bounceOut(1 - $x);
    }

    public static function easeInOutBounce(float $x): float
    {
        return $x < 0.5
            ? (1 - self::bounceOut(1 - 2 * $x)) / 2
            : (1 + self::bounceOut(2 * $x - 1)) / 2;
    }

    public static function easeInQuint(float $x): float
    {
        return pow($x, 5);
    }

    public static function easeOutQuint(float $x): float
    {
        return 1 - pow(1 - $x, 5);
    }

    public static function easeInOutQuint(float $x): float
    {
        return $x < 0.5 ? 16 * pow($x, 5) : 1 - pow(-2 * $x + 2, 5) / 2;
    }

    public static function easeInSine(float $x): float
    {
        return 1 - cos(($x * pi()) / 2);
    }

    public static function easeOutSine(float $x): float
    {
        return sin(($x * pi()) / 2);
    }

    public static function easeInOutSine(float $x): float
    {
        return -(cos(pi() * $x) - 1) / 2;
    }

    public static function easeInExpo(float $x): float
    {
        return 0.0 === $x ? 0 : pow(2, 10 * $x - 10);
    }

    public static function easeOutExpo(float $x): float
    {
        return abs($x - 1.0) < 0.0001 ? 1.0 : 1 - pow(2, -10 * $x);
    }

    public static function easeInOutExpo(float $x): float
    {
        if (0.0 === $x) {
            return 0;
        }
        if (1.0 === $x) {
            return 1;
        }

        return $x < 0.5
            ? pow(2, 20 * $x - 10) / 2
            : (2 - pow(2, -20 * $x + 10)) / 2;
    }

    public static function easeInCirc(float $x): float
    {
        return 1 - sqrt(1 - pow($x, 2));
    }

    public static function easeOutCirc(float $x): float
    {
        return sqrt(1 - pow($x - 1, 2));
    }

    public static function easeInOutCirc(float $x): float
    {
        return $x < 0.5
            ? (1 - sqrt(1 - pow(2 * $x, 2))) / 2
            : (sqrt(1 - pow(-2 * $x + 2, 2)) + 1) / 2;
    }

    public static function easeInBack(float $x): float
    {
        $c1 = 1.70158;
        $c3 = $c1 + 1;

        return $c3 * pow($x, 3) - $c1 * pow($x, 2);
    }

    public static function easeOutBack(float $x): float
    {
        $c1 = 1.70158;
        $c3 = $c1 + 1;

        return 1 + $c3 * pow($x - 1, 3) + $c1 * pow($x - 1, 2);
    }

    public static function easeInOutBack(float $x): float
    {
        $c1 = 1.70158;
        $c2 = $c1 * 1.525;
        if ($x < 0.5) {
            return (pow(2 * $x, 2) * ((($c2 + 1) * 2 * $x) - $c2)) / 2;
        } else {
            return (pow(2 * $x - 2, 2) * ((($c2 + 1) * ($x * 2 - 2)) + $c2) + 2) / 2;
        }
    }

    public static function easeInElastic(float $x): float
    {
        if (0.0 === $x) {
            return 0;
        }
        if (1.0 === $x) {
            return 1;
        }
        $c4 = (2 * pi()) / 3;

        return -pow(2, 10 * $x - 10) * sin(($x * 10 - 10.75) * $c4);
    }

    public static function easeOutElastic(float $x): float
    {
        if (0.0 === $x) {
            return 0;
        }
        if (1.0 === $x) {
            return 1;
        }
        $c4 = (2 * pi()) / 3;

        return pow(2, -10 * $x) * sin(($x * 10 - 0.75) * $c4) + 1;
    }

    public static function easeInOutElastic(float $x): float
    {
        if (0.0 === $x) {
            return 0;
        }
        if (1.0 === $x) {
            return 1;
        }
        $c5 = (2 * pi()) / 4.5;
        if ($x < 0.5) {
            return -(pow(2, 20 * $x - 10) * sin((20 * $x - 11.125) * $c5)) / 2;
        } else {
            return (pow(2, -20 * $x + 10) * sin((20 * $x - 11.125) * $c5)) / 2 + 1;
        }
    }

    private static function bounceOut(float $x): float
    {
        $n1 = 7.5625;
        $d1 = 2.75;

        if ($x < 1 / $d1) {
            return $n1 * $x * $x;
        } elseif ($x < 2 / $d1) {
            $x = $x - (1.5 / $d1);

            return $n1 * $x * $x + 0.75;
        } elseif ($x < 2.5 / $d1) {
            $x = $x - (2.25 / $d1);

            return $n1 * $x * $x + 0.9375;
        } else {
            $x = $x - (2.625 / $d1);

            return $n1 * $x * $x + 0.984375;
        }
    }
}
