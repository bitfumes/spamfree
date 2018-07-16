# Introduction

This is a simple spam detector which currently detect only keyheld down and invalid keyword.
This is just a package for the spam system created by Jeffrey Way in its Lets Build Forum Series at Laracast, [Let's Build a forum with Laravel](https://laracasts.com/series/lets-build-a-forum-with-laravel)

# Installation

`Composer require bitfumes/spamfree`

# Usage

Once you have the package in your project then you just need to use this in your request validation.Like if you want to protect body then

`'body' : ['required',new Spamfree]`

Use Bitfumes\Spamfree\Rules\Spamfree at the top where you have your validation.

## Credits

Based on work originally created by Jeffrey Way: <https://github.com/JeffreyWay>

## License

This work is MIT-licensed
