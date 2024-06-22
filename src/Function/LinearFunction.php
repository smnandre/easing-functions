<?php

namespace Easing\Function;

class LinearFunction
{
    public function __construct()
    {
    }

    public function __invoke(float $t): float
    {
        return $t;
    }

    /**
     * <linear-easing-function>
     *
     * Specifies a linear() function with one or more comma-separated linear stops, each containing up to two optional stop lengths, to control the progress of an animation or transition.
     *
     * The linear() function specifies a <linear-stop-list>, a comma-separated list of points along the animation or transition progress. Each point or <linear-stop> in the list is specified as a <number> between 0 and 1. By default, each stop in the <linear-stop-list> is equidistant. To have more control on the progress of the animation or transition, each point can include up to two optional <percentage> <linear-stop-length> values.
     *
     * <number>: Represents a point in time along the duration of the animation or transition. The value should be between 0 and 1, where 0 represents the start of the iteration and 1 represents the end.
     * <percentage>: Indicates the position of a linear stop along the duration. It can take up to two values. If one value is specified, it defines the start of the associated linear stop. If two percentage values are specified, they define the length of the stop: the first percentage indicates the starting point and the second percentage indicates the ending point for that segment in the animation or transition. If no <percentage> value is specified, which is the default, the stops are spread evenly along the timeline.
 */




}
