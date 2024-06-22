<?php

declare(strict_types=1);

/*
 * This file is part of the easing/functions package.
 *
 * (c) Simon Andre <smn.andre@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Easing\Tests;

use Easing\Functions;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(Functions::class)]
final class FunctionsTest extends TestCase
{
    #[DataProvider('easeOutCubicProvider')]
    public function testEaseOutCubic(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutCubic($input), 0.0001);
    }

    #[DataProvider('easeInOutCubicProvider')]
    public function testEaseInOutCubic(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutCubic($input), 0.0001);
    }

    #[DataProvider('easeInQuartProvider')]
    public function testEaseInQuart(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInQuart($input), 0.0001);
    }

    #[DataProvider('easeOutQuartProvider')]
    public function testEaseOutQuart(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutQuart($input), 0.0001);
    }

    #[DataProvider('easeInOutQuartProvider')]
    public function testEaseInOutQuart(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutQuart($input), 0.0001);
    }

    #[DataProvider('easeInCubicProvider')]
    public function testEaseInCubic(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInCubic($input), 0.0001);
    }

    #[DataProvider('easeInQuadProvider')]
    public function testEaseInQuad(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInQuad($input), 0.0001);
    }

    #[DataProvider('easeOutQuadProvider')]
    public function testEaseOutQuad(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutQuad($input), 0.0001);
    }

    #[DataProvider('easeInOutQuadProvider')]
    public function testEaseInOutQuad(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutQuad($input), 0.0001);
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutCubicProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.875],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutCubicProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, 0.0625],
            [0.5, 0.5],
            [0.75, 0.9375],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInQuartProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.0625],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutQuartProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.9375],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutQuartProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, 0.03125],
            [0.5, 0.5],
            [0.75, 0.96875],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInCubicProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.125],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInQuadProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.25],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutQuadProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.75],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutQuadProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, 0.125],
            [0.5, 0.5],
            [0.75, 0.875],
            [1.0, 1.0],
        ];
    }
}
