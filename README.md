<h1 align=center>Easing & Timing Functions</h1>
<div align="center"><pre>composer require smnandre/easing-functions</pre></div>
<div align="center">

[![PHP Version](https://img.shields.io/badge/%C2%A0php-%3E%3D%208.3-777BB4.svg?logo=php&logoColor=white)](https://github.com/smnandre/easing-functions/blob/main/composer.json)
[![CI](https://github.com/smnandre/easing-functions/actions/workflows/CI.yaml/badge.svg)](https://github.com/smnandre/easing-functions/actions)
[![Release](https://img.shields.io/github/v/release/smnandre/easing-functions)](https://github.com/smnandre/easing-functions/releases)
[![License](https://img.shields.io/github/license/smnandre/easing-functions?color=cc67ff)](https://github.com/smnandre/easing-functions/blob/main/LICENSE)
[![Codecov](https://codecov.io/gh/smnandre/easing-functions/graph/badge.svg?token=RC8Z6F4SPC)](https://codecov.io/gh/smnandre/easing-functions)

</div>

---

**EasingFunctions** is a **PHP library** that provides easing functions for animations, transitions, etc/

| x     |                            In                            |                               InOut                               |                             Out                             |
|-------|:--------------------------------------------------------:|:-----------------------------------------------------------------:|:-----------------------------------------------------------:|
| Cubic | ![Ease In Cubic](img/easeInCubic.svg) <br> `easeCubicIn` | ![Ease InOut Cubic](img/easeInOutCubic.svg) <br> `easeCubicInOut` | ![Ease Out Cubic](img/easeOutCubic.svg) <br> `easeCubicOut` |
| Quart | ![Ease In Quart](img/easeInQuart.svg) <br> `easeQuartIn` | ![Ease InOut Quart](img/easeInOutQuart.svg) <br> `easeQuartInOut` | ![Ease Out Quart](img/easeOutQuart.svg) <br> `easeQuartOut` |
| Quad  |  ![Ease In Quad](img/easeInQuad.svg) <br> `easeQuadIn`   |  ![Ease InOut Quad](img/easeInOutQuad.svg) <br> `easeQuadInOut`   |  ![Ease Out Quad](img/easeOutQuad.svg) <br> `easeQuadOut`   |

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

### Time Comparison

| Function   | 12.5% | 25%  | 37.5% | 50%   | 62.5% | 75%   | 87.5% | 
 |------------|-------|------|-------|-------|-------|-------|-------|
| OutQuart   | ██    | ███▎ | ████  | ████▌ | ████▊ | ████▊ | ████▊ |  
| OutCubic   | █▌    | ██▊  | ███▊  | ████▎ | ████▌ | ████▊ | ████▊ |  
| OutQuad    | █     | ██   | ███   | ███▊  | ████▎ | ████▌ | ████▊ |  
| InOutQuad  |       | ▌    | █▎    | ██▌   | ███▌  | ████▎ | ████▊ |  
| InOutCubic |       | ▎    | █     | ██▌   | ███▊  | ████▌ | ████▊ |  
| InOutQuart |       |      | ▊     | ██▌   | ████  | ████▊ | ████▊ |  
| InQuad     |       | ▎    | ▌     | █▎    | █▊    | ██▊   | ███▊  |  
| InCubic    |       |      | ▎     | ▌     | █     | ██    | ███▎  |  
| InQuart    |       |      |       | ▎     | ▊     | █▌    | ██▊   |  

## License

This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for more information.
