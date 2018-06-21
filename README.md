# HappyMath

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Calculate expressions formula style like spreadsheets

## Install

Via Composer

``` bash
$ composer require gigac/happymath
```

## Usage

``` php
$expression = 'AVG(5,3,SUM(1,2,MAX(1,2),3,12))';
$result = new Gigac\HappyMath\HappyMath($expression);
```

## Testing

``` bash
$ ./vendot/bin/phpunit
```

## ToDo
* Refactor structure
* Finish tests
* Check valid expression
* ...

``` bash
$ ./vendot/bin/phpunit
```

## Credits

- [Argir Popov][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Gigac/HappyMath.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Gigac/HappyMath/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Gigac/HappyMath.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Gigac/HappyMath.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Gigac/HappyMath.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Gigac/HappyMath
[link-travis]: https://travis-ci.org/Gigac/HappyMath
[link-scrutinizer]: https://scrutinizer-ci.com/g/Gigac/HappyMath/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Gigac/HappyMath
[link-downloads]: https://packagist.org/packages/Gigac/HappyMath
[link-author]: https://github.com/gigac
[link-contributors]: ../../contributors
