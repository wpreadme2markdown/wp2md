# Changelog

## 4.1.1

* Fix phar not including necessary files

## 4.1.0

* Added `--skip-image-check` option provided by wp2md library 4.1.0 [#4] (by [@LC43])
* Symfony 7 allowed
* Rebuilt with all dependencies updated, this should fix PHP 8.1-8.4 deprecations

## 4.0.2

* Updated wp2md library to 4.0.3
* Symfony 6 is now allowed with the composer based setups

## 4.0.1

* Updated wp2md library to 4.0.1

## 4.0.0

* Dropped support for PHP earlier than 7.2
* Updated wp2md library to 4.0

## 3.1.0

* Depend on composer v2
* Base library updated to 3.1.0 in phar

## 3.0.3

* Fixed incompatibility with Symfony 5

## 3.0.2

* Allow Symfony 5 if installed by composer
* Show base library version in `wp2md --version`

## 3.0.1

* Update library to 3.0.1
* Allow Symfony 4 if installed by composer
* Fix PHP version to the lowest supported in config
* Do not use lowest library version

## 3.0.0

First release after lib/cli split \
Previous version was wpreadme2markdown/wpreadme2markdown 2.0.2

* Split CLI and Library repositories
* CLI now uses Symfony 3.2 and requires PHP 5.5.9
* PHAR is now built with lowest required dependency versions
* CLI now works in single command mode, `wp2md convert` is now simply `wp2md`

[@LC43]: https://github.com/LC43

[#4]: https://github.com/wpreadme2markdown/wp2md/pull/4
