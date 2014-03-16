# Omnipay: Pacnet

**Pacnet Services Ltd driver for the Omnipay PHP payment processing library**

[![Build Status](https://travis-ci.org/mfauveau/omnipay-pacnet.png?branch=master)](https://travis-ci.org/mfauveau/omnipay-pacnet)
[![Latest Stable Version](https://poser.pugx.org/mfauveau/omnipay-pacnet/version.png)](https://packagist.org/packages/mfauveau/omnipay-pacnet)
[![Total Downloads](https://poser.pugx.org/mfauveau/omnipay-pacnet/d/total.png)](https://packagist.org/packages/mfauveau/omnipay-pacnet)

[Omnipay](https://github.com/omnipay/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements [Pacnet Services Ltd](http://www.pacnetservices.com/index.php/) support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "mfauveau/omnipay-pacnet": "~2.0"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

The following gateways are provided by this package:

* Pacnet

For general usage instructions, please see the main [Omnipay](https://github.com/omnipay/omnipay)
repository.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/mfauveau/omnipay-pacnet/issues),
or better yet, fork the library and submit a pull request.
