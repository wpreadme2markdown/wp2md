# Changelog

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
