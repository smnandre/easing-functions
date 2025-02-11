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
    #[DataProvider('easeInBounceProvider')]
    public function testEaseInBounce(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInBounce($input), 0.0001);
    }

    #[DataProvider('easeOutBounceProvider')]
    public function testEaseOutBounce(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutBounce($input), 0.0001);
    }

    #[DataProvider('easeInOutBounceProvider')]
    public function testEaseInOutBounce(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutBounce($input), 0.0001);
    }

    #[DataProvider('easeInQuintProvider')]
    public function testEaseInQuint(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInQuint($input), 0.0001);
    }

    #[DataProvider('easeOutQuintProvider')]
    public function testEaseOutQuint(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutQuint($input), 0.0001);
    }

    #[DataProvider('easeInOutQuintProvider')]
    public function testEaseInOutQuint(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutQuint($input), 0.0001);
    }

    #[DataProvider('easeInSineProvider')]
    public function testEaseInSine(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInSine($input), 0.0001);
    }

    #[DataProvider('easeOutSineProvider')]
    public function testEaseOutSine(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutSine($input), 0.0001);
    }

    #[DataProvider('easeInOutSineProvider')]
    public function testEaseInOutSine(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutSine($input), 0.0001);
    }

    #[DataProvider('easeInExpoProvider')]
    public function testEaseInExpo(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInExpo($input), 0.0001);
    }

    #[DataProvider('easeOutExpoProvider')]
    public function testEaseOutExpo(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutExpo($input), 0.0001);
    }

    #[DataProvider('easeInOutExpoProvider')]
    public function testEaseInOutExpo(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutExpo($input), 0.0001);
    }

    #[DataProvider('easeInCircProvider')]
    public function testEaseInCirc(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInCirc($input), 0.0001);
    }

    #[DataProvider('easeOutCircProvider')]
    public function testEaseOutCirc(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutCirc($input), 0.0001);
    }

    #[DataProvider('easeInOutCircProvider')]
    public function testEaseInOutCirc(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutCirc($input), 0.0001);
    }

    #[DataProvider('easeInBackProvider')]
    public function testEaseInBack(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInBack($input), 0.0001);
    }

    #[DataProvider('easeOutBackProvider')]
    public function testEaseOutBack(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutBack($input), 0.0001);
    }

    #[DataProvider('easeInOutBackProvider')]
    public function testEaseInOutBack(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutBack($input), 0.0001);
    }

    #[DataProvider('easeInElasticProvider')]
    public function testEaseInElastic(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInElastic($input), 0.0001);
    }

    #[DataProvider('easeOutElasticProvider')]
    public function testEaseOutElastic(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeOutElastic($input), 0.0001);
    }

    #[DataProvider('easeInOutElasticProvider')]
    public function testEaseInOutElastic(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInOutElastic($input), 0.0001);
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

    #[DataProvider('easeInCubicProvider')]
    public function testEaseInCubic(float $input, float $expected): void
    {
        $this->assertEqualsWithDelta($expected, Functions::easeInCubic($input), 0.0001);
    }

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

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInBounceProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.234375],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutBounceProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.765625],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutBounceProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, 0.1171875],
            [0.5, 0.5],
            [0.75, 0.8828125],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInQuintProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.03125],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutQuintProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.96875],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutQuintProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, 0.015625],
            [0.5, 0.5],
            [0.75, 0.984375],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInSineProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.292893],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutSineProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.707106],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutSineProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, 0.1464466094],
            [0.5, 0.5],
            [0.75, 0.8535533906],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInExpoProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.03125],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutExpoProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.96875],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutExpoProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, 0.015625],
            [0.5, 0.5],
            [0.75, 0.984375],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInCircProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.133974],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutCircProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 0.866025],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutCircProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, 0.066987],
            [0.5, 0.5],
            [0.75, 0.933012],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInBackProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, -0.0876975],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutBackProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 1.0876975],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutBackProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, -0.09968184375],
            [0.5, 0.5],
            [0.75, 1.09968184375],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInElasticProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, -0.015625],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeOutElasticProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.5, 1.015625],
            [1.0, 1.0],
        ];
    }

    /**
     * @return list<array{0: float, 1: float}>
     */
    public static function easeInOutElasticProvider(): array
    {
        return [
            [0.0, 0.0],
            [0.25, 0.011969444423734044],
            [0.5, 0.5],
            [0.75, 0.988030555576266],
            [1.0, 1.0],
        ];
    }
}
