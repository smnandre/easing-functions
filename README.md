<h1 align=center>Easing & Timing PHP Functions</h1>
<img src="./easing-functions.svg" alt="Easing Functions" align="center">
<div align="center"><pre>composer require smnandre/easing-functions</pre></div>
<div align="center">

[![PHP Version](https://img.shields.io/badge/%C2%A0php-%3E%3D%208.3-777BB4.svg?logo=php&logoColor=white)](https://github.com/smnandre/easing-functions/blob/main/composer.json)
[![CI](https://github.com/smnandre/easing-functions/actions/workflows/CI.yaml/badge.svg)](https://github.com/smnandre/easing-functions/actions)
[![Release](https://img.shields.io/github/v/release/smnandre/easing-functions)](https://github.com/smnandre/easing-functions/releases)
[![License](https://img.shields.io/github/license/smnandre/easing-functions?color=cc67ff)](https://github.com/smnandre/easing-functions/blob/main/LICENSE)
[![Codecov](https://codecov.io/gh/smnandre/easing-functions/graph/badge.svg?token=RC8Z6F4SPC)](https://codecov.io/gh/smnandre/easing-functions)

</div>

---

**EasingFunctions** is a **PHP library** that provides a collection of easing functions commonly used in animations, transitions, and smooth interpolations.

It includes standard easing equations: quadratic, cubic, quartic, quintic, sine, exponential, circular, elastic, and bounce functions.

Each of them is available in three variations:
* **In**: The motion starts slowly and accelerates.
* **Out**: The motion starts quickly and decelerates.
* **InOut**: A combination of both, accelerating at the start and decelerating at the end.

## Easing Functions

| x       |                               In                               |                                Out                                |                                   InOut                                 |
|---------|:--------------------------------------------------------------:|:-----------------------------------------------------------------:|:-----------------------------------------------------------------------:|
| Cubic   |    ![Ease In Cubic](img/easeInCubic.svg) <br> `easeInCubic`    |    ![Ease Out Cubic](img/easeOutCubic.svg) <br> `easeOutCubic`    |    ![Ease InOut Cubic](img/easeInOutCubic.svg) <br> `easeInOutCubic`    |
| Quart   |    ![Ease In Quart](img/easeInQuart.svg) <br> `easeInQuart`    |    ![Ease Out Quart](img/easeOutQuart.svg) <br> `easeOutQuart`    |    ![Ease InOut Quart](img/easeInOutQuart.svg) <br> `easeInOutQuart`    |
| Quad    |     ![Ease In Quad](img/easeInQuad.svg) <br> `easeInQuad`      |     ![Ease Out Quad](img/easeOutQuad.svg) <br> `easeOutQuad`      |     ![Ease InOut Quad](img/easeInOutQuad.svg) <br> `easeInOutQuad`      |
| Quint   |    ![Ease In Quint](img/easeInQuint.svg) <br> `easeInQuint`    |    ![Ease Out Quint](img/easeOutQuint.svg) <br> `easeOutQuint`    |    ![Ease InOut Quint](img/easeInOutQuint.svg) <br> `easeInOutQuint`    |
| Sine    |     ![Ease In Sine](img/easeInSine.svg) <br> `easeInSine`      |     ![Ease Out Sine](img/easeOutSine.svg) <br> `easeOutSine`      |     ![Ease InOut Sine](img/easeInOutSine.svg) <br> `easeInOutSine`      |
| Expo    |     ![Ease In Expo](img/easeInExpo.svg) <br> `easeInExpo`      |     ![Ease Out Expo](img/easeOutExpo.svg) <br> `easeOutExpo`      |     ![Ease InOut Expo](img/easeInOutExpo.svg) <br> `easeInOutExpo`      |
| Circ    |     ![Ease In Circ](img/easeInCirc.svg) <br> `easeInCirc`      |     ![Ease Out Circ](img/easeOutCirc.svg) <br> `easeOutCirc`      |     ![Ease InOut Circ](img/easeInOutCirc.svg) <br> `easeInOutCirc`      |
| Back    |     ![Ease In Back](img/easeInBack.svg) <br> `easeInBack`      |     ![Ease Out Back](img/easeOutBack.svg) <br> `easeOutBack`      |     ![Ease InOut Back](img/easeInOutBack.svg) <br> `easeInOutBack`      |
| Bounce  |  ![Ease In Bounce](img/easeInBounce.svg) <br> `easeInBounce`   |  ![Ease Out Bounce](img/easeOutBounce.svg) <br> `easeOutBounce`   |  ![Ease InOut Bounce](img/easeInOutBounce.svg) <br> `easeInOutBounce`   |
| Elastic | ![Ease In Elastic](img/easeInElastic.svg) <br> `easeInElastic` | ![Ease Out Elastic](img/easeOutElastic.svg) <br> `easeOutElastic` | ![Ease InOut Elastic](img/easeInOutElastic.svg) <br> `easeInOutElastic` |



## Installation

```shell
composer require smnandre/easing-functions
```

## Usage

```php
Easing\Functions::easeOutCubic(0);
// 0
Easing\Functions::easeOutCubic(0.5);
// 0.875

$values = array_map(Easing\Functions::easeOutCubic(...), range(0, 1, 0.1));
echo implode(" ", $values);
// 0 0.271 0.488 0.657 0.784 0.875 0.936 0.973 0.992 0.999 1
```

## Functions

### Easing Functions

| Name             | Formulae                                                 | Preview                                            |
|------------------|----------------------------------------------------------|----------------------------------------------------|
| `easeOutCubic`   | $`1 - pow(1 - x, 3)`$                                    | ![easeOutCubic PHP](img/easeOutCubic_line.svg)     |
| `easeInOutCubic` | $`x < 0.5 ? 4 * pow(x, 3) : 1 - pow(-2 * x + 2, 3) / 2`$ | ![easeInOutCubic PHP](img/easeInOutCubic_line.svg) |
| `easeInQuart`    | $`pow(x, 4)`$                                            | ![easeInQuart PHP](img/easeInQuart_line.svg)       |
| `easeOutQuart`   | $`1 - pow(1 - x, 4)`$                                    | ![easeOutQuart PHP](img/easeOutQuart_line.svg)     |
| `easeInOutQuart` | $`x < 0.5 ? 8 * pow(x, 4) : 1 - pow(-2 * x + 2, 4) / 2`$ | ![easeInOutQuart PHP](img/easeInOutQuart_line.svg) |
| `easeInCubic`    | $`pow(x, 3)`$                                            | ![easeInCubic PHP](img/easeInCubic_line.svg)       |
| `easeInQuad`     | $`x * x`$                                                | ![easeInQuad PHP](img/easeInQuad_line.svg)         |
| `easeOutQuad`    | $`1 - (1 - x) * (1 - x)`$                                | ![easeOutQuad PHP](img/easeOutQuad_line.svg)       |
| `easeInOutQuad`  | $`x < 0.5 ? 2 * x * x : 1 - pow(-2 * x + 2, 2) / 2`$     | ![easeInOutQuad PHP](img/easeInOutQuad_line.svg)   |
| `easeInQuint`    | $`pow(x, 5)`$                                            | ![easeInQuint PHP](img/easeInQuint_line.svg)       |   
| `easeOutQuint`   | $`1 - pow(1 - x, 5)`$                                    | ![easeOutQuint PHP](img/easeOutQuint_line.svg)     |
| `easeInOutQuint` | $`x < 0.5 ? 16 * pow(x, 5) : 1 - pow(-2 * x + 2, 5) / 2`$ | ![easeInOutQuint PHP](img/easeInOutQuint_line.svg) |
| `easeInSine`     | $`1 - cos((x * pi()) / 2)`$                              | ![easeInSine PHP](img/easeInSine_line.svg)         |
| `easeOutSine`    | $`sin((x * pi()) / 2)`$                                  | ![easeOutSine PHP](img/easeOutSine_line.svg)       |
| `easeInOutSine`  | $`-(cos(pi() * x) - 1) / 2`$                            | ![easeInOutSine PHP](img/easeInOutSine_line.svg)   |
| `easeInExpo`     | $`x == 0 ? 0 : pow(2, 10 * x - 10)`$                    | ![easeInExpo PHP](img/easeInExpo_line.svg)         |
| `easeOutExpo`    | $`x == 1 ? 1 : 1 - pow(2, -10 * x)`$                    | ![easeOutExpo PHP](img/easeOutExpo_line.svg)       |
| `easeInOutExpo`  | $`x == 0 ? 0 : x == 1 ? 1 : x < 0.5 ? pow(2, 20 * x - 10) / 2 : (2 - pow(2, -20 * x + 10)) / 2`$ | ![easeInOutExpo PHP](img/easeInOutExpo_line.svg) |
| `easeInCirc`     | $`1 - sqrt(1 - pow(x, 2))`$                             | ![easeInCirc PHP](img/easeInCirc_line.svg)         |
| `easeOutCirc`    | $`sqrt(1 - pow(x - 1, 2))`$                             | ![easeOutCirc PHP](img/easeOutCirc_line.svg)       |
| `easeInOutCirc`  | $`x < 0.5 ? (1 - sqrt(1 - pow(2 * x, 2))) / 2 : (sqrt(1 - pow(-2 * x + 2, 2)) + 1) / 2`$ | ![easeInOutCirc PHP](img/easeInOutCirc_line.svg) |
| `easeInBack`     | $`2.70158 * pow(x, 3) - 1.70158 * pow(x, 2)`$           | ![easeInBack PHP](img/easeInBack_line.svg)         |
| `easeOutBack`    | $`1 + 2.70158 * pow(x - 1, 3) + 1.70158 * pow(x - 1, 2)`$ | ![easeOutBack PHP](img/easeOutBack_line.svg)       |
| `easeInOutBack`  | $`x < 0.5 ? (pow(2 * x, 2) * ((3.59258 * 2 * x) - 2.59258)) / 2 : (pow(2 * x - 2, 2) * ((3.59258 * (x * 2 - 2)) + 2.59258) + 2) / 2`$ | ![easeInOutBack PHP](img/easeInOutBack_line.svg) |
| `easeInBounce`   | $`1 - easeOutBounce(1 - x)`$                            | ![easeInBounce PHP](img/easeInBounce_line.svg)     |
| `easeOutBounce`  | See `bounceOut` function                                 | ![easeOutBounce PHP](img/easeOutBounce_line.svg)   |
| `easeInOutBounce`| $`x < 0.5 ? (1 - easeOutBounce(1 - 2 * x)) / 2 : (1 + easeOutBounce(2 * x - 1)) / 2`$ | ![easeInOutBounce PHP](img/easeInOutBounce_line.svg) |
| `easeInElastic`  | $`x == 0 ? 0 : x == 1 ? 1 : -pow(2, 10 * x - 10) * sin((x * 10 - 10.75) * ((2 * pi()) / 3))`$ | ![easeInElastic PHP](img/easeInElastic_line.svg) |
| `easeOutElastic` | $`x == 0 ? 0 : x == 1 ? 1 : pow(2, -10 * x) * sin((x * 10 - 0.75) * ((2 * pi()) / 3)) + 1`$ | ![easeOutElastic PHP](img/easeOutElastic_line.svg) |
| `easeInOutElastic`| $`x == 0 ? 0 : x == 1 ? 1 : x < 0.5 ? -(pow(2, 20 * x - 10) * sin((20 * x - 11.125) * ((2 * pi()) / 4.5))) / 2 : (pow(2, -20 * x + 10) * sin((20 * x - 11.125) * ((2 * pi()) / 4.5))) / 2 + 1`$ | ![easeInOutElastic PHP](img/easeInOutElastic_line.svg) |

## License

This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for more information.
