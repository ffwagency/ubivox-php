# Ubivox Newsletter API PHP SDK (Unofficially)

[![Build Status](https://travis-ci.org/ffwagency/ubivox-php.svg?branch=master)](https://travis-ci.org/ffwagency/ubivox-php)
[![Latest Stable Version](https://poser.pugx.org/ffwagency/ubivox-php/v/stable)](https://packagist.org/packages/ffwagency/ubivox-php)
[![Total Downloads](https://poser.pugx.org/ffwagency/ubivox-php/downloads)](https://packagist.org/packages/ffwagency/ubivox-php)
[![Code Climate](https://codeclimate.com/github/ffwagency/ubivox-php/badges/gpa.svg)](https://codeclimate.com/github/ffwagency/ubivox-php)
[![License](https://poser.pugx.org/ffwagency/ubivox-php/license)](https://packagist.org/packages/ffwagency/ubivox-php)

## Requirements
* PHP 7.1+
* Ubivox.com account

## Installation

The Ubivox PHP SDK can be installed using [Composer](https://packagist.org/packages/ffwagency/Ubivox-php).

## Examples

Examples are available in /examples.

* Copy default.settings.php to settings.php
* Edit settings.php and fill in your Ubivox company machine name, user name and password.
* Some of the examples require editing of ids e.g. maillist id, delivery id etc.

### Composer

Inside of `composer.json` specify the following:

``` json
{
  "require": {
    "ffwagency/ubivox-php": "dev-master"
  }
}
```

## Copyright and license

Copyright (c) 2018-present, Jens Beltofte <jens.beltofte@ffwagency.com> (ffwagency.com)

Licensed under the Software License Agreement (BSD License).

For the full copyright and license information, please view the LICENSE file that was distributed
with this source code.
