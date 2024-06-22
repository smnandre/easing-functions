<?php

// Functions for easing
function easeOutCubic($x) {
    return 1 - pow(1 - $x, 3);
}

function easeInOutCubic($x) {
    return $x < 0.5 ? 4 * $x * $x * $x : 1 - pow(-2 * $x + 2, 3) / 2;
}

function easeInQuart($x) {
    return $x * $x * $x * $x;
}

function easeOutQuart($x) {
    return 1 - pow(1 - $x, 4);
}

function easeInOutQuart($x) {
    return $x < 0.5 ? 8 * $x * $x * $x * $x : 1 - pow(-2 * $x + 2, 4) / 2;
}

function easeInCubic($x) {
    return $x * $x * $x;
}

function easeInQuad($x) {
    return $x * $x;
}

function easeOutQuad($x) {
    return 1 - (1 - $x) * (1 - $x);
}

function easeInOutQuad($x) {
    return $x < 0.5 ? 2 * $x * $x : 1 - pow(-2 * $x + 2, 2) / 2;
}

// Function to create SVG file
function createSVG($filename, $function) {
    $width = 400;
    $height = 280;
    $padding = 30;

    $svg = <<<SVG
<svg width="$width" height="$height" xmlns="http://www.w3.org/2000/svg">
  <rect width="100%" height="100%" fill="white"/>
  <polyline fill="none" stroke="black" stroke-width="3" stroke-linecap="round" points="
SVG;

    $nbPoints = 100;

    for ($i = 0; $i <= $nbPoints; $i++) {
        $x = $i / $nbPoints;
        $y = $function($x);
        $svg .= (($width - 2 * $padding) * $x + $padding) . ',' . (($height - 2 * $padding) * (1 - $y) + $padding) . ' ';
    }

    $svg .= '"/>
</svg>';

    file_put_contents($filename, $svg);
}


// Function to create SVG file with color gradient based on acceleration
function createSVG2($filename, $function) {
    $width = 200;
    $height = 140;
    $padding = 10;

    // Calculate points and colors
    $points = [];
    $colors = [];
    for ($i = 0; $i <= 100; $i++) {
        $x = $i / 100;
        $y = $function($x);
        $points[] = [(($width - 2 * $padding) * $x + $padding), (($height - 2 * $padding) * (1 - $y) + $padding)];

        if ($i > 0) {
            $prevX = ($i - 1) / 100;
            $prevY = $function($prevX);
            $slope = abs($y - $prevY) / abs($x - $prevX);
            $color = getColorForSlope($slope);
            $colors[] = $color;
        }
    }
    // Generate SVG content with CSS block
    $svg = <<<SVG
<svg width="$width" height="$height" xmlns="http://www.w3.org/2000/svg">
  <style>
    .line { stroke-width: 2; }
    .line { --hue: 0; stroke: hsl(var(--hue), 100%, 50%); }
  </style>
  <rect width="100%" height="100%" fill="black"/>
SVG;

    for ($i = 1; $i < count($points); $i++) {
        $hue = $colors[$i-1];
        $svg .= '<line x1="' . $points[$i-1][0] . '" y1="' . $points[$i-1][1] . '" x2="' . $points[$i][0] . '" y2="' . $points[$i][1] . '" class="line" style="--hue:' . $hue . '"/>';
    }

    $svg .= '</svg>';

    file_put_contents($filename, $svg);
}

// Function to get hue value based on slope
function getColorForSlope($slope) {
    $hue = max(0, min(240, 240 - ($slope * 120))); // Hue from blue (240) to red (0)
    return $hue;
}

// Function to create SVG file with color gradient based on acceleration
function createSVG3($filename, $function) {
    $width = 200;
    $height = 140;
    $padding = 10;

    // Calculate points and colors
    $points = [];
    $colors = [];
    for ($i = 0; $i <= 100; $i++) {
        $x = $i / 100;
        $y = $function($x);
        $points[] = [(($width - 2 * $padding) * $x + $padding), (($height - 2 * $padding) * (1 - $y) + $padding)];

        if ($i > 0) {
            $prevX = ($i - 1) / 100;
            $prevY = $function($prevX);
            $slope = abs($y - $prevY) / abs($x - $prevX);
            $color = getColorForSlope($slope);
            $colors[] = $color;
        }
    }

    // Calculate total length for the stroke-dasharray
    $totalLength = 0;
    for ($i = 1; $i < count($points); $i++) {
        $dx = $points[$i][0] - $points[$i-1][0];
        $dy = $points[$i][1] - $points[$i-1][1];
        $totalLength += sqrt($dx * $dx + $dy * $dy);
    }

    // Generate SVG content with CSS block and animation
    $svg = <<<SVG
<svg width="$width" height="$height" xmlns="http://www.w3.org/2000/svg">
  <style>
    .line { stroke-width: 2; stroke-dasharray: $totalLength; stroke-dashoffset: $totalLength; animation: draw 2s forwards; }
    @keyframes draw {
      to {
        stroke-dashoffset: 0;
      }
    }
    .line { --hue: 0; stroke: hsl(var(--hue), 100%, 50%); }
  </style>
<rect width="100%" height="100%" fill="white"/>
SVG;

    for ($i = 1; $i < count($points); $i++) {
        $hue = $colors[$i-1];
        $svg .= '<line x1="' . $points[$i-1][0] . '" y1="' . $points[$i-1][1] . '" x2="' . $points[$i][0] . '" y2="' . $points[$i][1] . '" class="line" style="--hue:' . $hue . '"/>';
    }

    $svg .= '</svg>';

    file_put_contents($filename, $svg);
}

$imageDir = __DIR__ . '/../img';

// Generate SVG files
$functions = [
    'easeInCubic',
    'easeOutCubic',
    'easeInOutCubic',

    'easeInQuart',
    'easeOutQuart',
    'easeInOutQuart',

    'easeInQuad',
    'easeOutQuad',
    'easeInOutQuad',
];
foreach ($functions as $function) {
    createSVG($imageDir.'/'.$function.'.svg', $function);
    createSVG2($imageDir.'/'.$function.'2.svg', $function);
    createSVG3($imageDir.'/'.$function.'3.svg', $function);
}

echo "SVG files have been generated.\n";
