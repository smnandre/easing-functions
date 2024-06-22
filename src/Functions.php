<?php

namespace Easing;

use Easing\Function\CubicBezierFunction as cubicBezier;
use Easing\Function\LinearFunction;

class Functions
{



    public static function easeOutQuad(): Closure
    {
        return cubicBezier(0.25, 0.46, 0.45, 0.94);
    }

}
