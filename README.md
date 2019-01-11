# Introduction

This is a simple spam detector which currently detect only keyheld down and invalid keyword.
This is just a package for the spam system created by Jeffrey Way in its Lets Build Forum Series at Laracast, [Let's Build a forum with Laravel](https://laracasts.com/series/lets-build-a-forum-with-laravel)

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/bitfumes/spam-free.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/bitfumes/spam-free.svg?style=flat-square)](https://packagist.org/packages/bitfumes/spam-free)

## Install

`composer require bitfumes/spamfree`

# Usage

Once you have the package in your project then you just need to use this in your request validation.Like if you want to protect body then

`'body' : ['required',new Spamfree]`

Use Bitfumes\Spamfree\Rules\Spamfree at the top where you have your validation.

## Testing

Run the tests with:

```bash
vendor/bin/phpunit
```

## Credits

Based on work originally created by Jeffrey Way: <https://github.com/JeffreyWay>

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email sarthak@bitfumes.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
