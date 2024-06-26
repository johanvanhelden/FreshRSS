# System Configurations without an User Interface

Most of configurations are available in the user interface.

Here is an overview of not available configs

## System wide configuration

see `./config.default.php` for all options. This file is very well documented.

Do not modify this file, which defines default values,
but instead edit `./data/config.php` after the install process is completed,
or edit `./data/config.custom.php` before the install process.

### Some selected options

#### System config: environment

(recommended) `'production'`: Does not PHP error messages within the application, just in the error log.

`'development'`: Displays PHP error messages within the application not just in the error log. Useful for code writing and testing. Use it on your secure development environment. Do not use it on production systems.

It does not have any effect for choosing the release channels.

`'environment'` default value `'production'`

#### System config: base_url

This option is displayed in Administration -> System configuration, but is not editable there.

This settings needs to be changed after moving the FreshRSS application from one server to another.

`'base_url'` value will be set while install process and depends on your server environment.

#### System config: logo_html

Replace the FreshRSS logo in the user interface with an own HTML code that includes the `<img>` tag as well.

It is rendered inside an `<a>...</a>` element and must be valid HTML or text.

It does not replace the FreshRSS logo as favicon, in the browser notification, and shortcut icon.

`'logo_html'` default value `''`

Example: `'<img class="logo" src="https://example.net/Hello.png" alt="Logo Example" /> Hello'`

#### System config: Sending an email

See the documentation directly in the source code `config.default.php`

## Application wide constants

See `./constants.php`. Do not edit this file. Create/edit `./constants.local.php` instead.

Some constants cannot be `update safe` changed. They are marked with `Not customisable`

### Example of constants.local.php

``` php
<?php
	define('CLEANCACHE_HOURS', 100);
```

File name: `constants.local.php`

Location: root directory of FreshRSS

### Some selected constants

#### Application constant: FRESHRSS_USERAGENT

FreshRSS has a default user agent string that can be overwritten in each feed setting.

`'FRESHRSS_USERAGENT'` default value starts with `'FreshRSS/'` and the FreshRSS version, used operating system and link to FreshRSS website.


#### Application constant: CLEANCACHE_HOURS

FreshRSS keeps feeds and fetched websites as `.spc` or `.html` file in `./data/cache` for a limited time. In some cases the storage could use a lot of storage space. Reducing the clean cache hours reduces the space.

`'CLEANCACHE_HOURS'` default value `720` (hours = 30 days)


## User wide configuration

Available for each user in `config.php` in `./data/users/username`. Edit there. Do not edit `./config-user.default.php` (it will be overwritten by the next system update and overruled by the user config file).


### User: simplify_over_n_feeds

Advanced property to automatically simplify the layout when there are many (1k+) feeds so that FreshRSS works out of the box with 20k+ feeds scenarios

`'simplify_over_n_feeds'` default value: `1000`
