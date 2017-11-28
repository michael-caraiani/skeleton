# TiSuit Skeleton

[![Build Status](https://travis-ci.org/TiSuit/skeleton.svg?branch=master)](https://travis-ci.org/TiSuit/skeleton) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/4244583f-be05-49a6-b742-9ad21ce30499/mini.png)](https://insight.sensiolabs.com/projects/4244583f-be05-49a6-b742-9ad21ce30499) [![Latest Stable Version](https://poser.pugx.org/tisuit/skeleton/version)](https://packagist.org/packages/tisuit/skeleton) [![Latest Unstable Version](https://poser.pugx.org/tisuit/skeleton/v/unstable)](//packagist.org/packages/tisuit/skeleton) [![Total Downloads](https://poser.pugx.org/tisuit/skeleton/downloads)](https://packagist.org/packages/tisuit/skeleton) [![Monthly Downloads](https://poser.pugx.org/tisuit/skeleton/d/monthly)](https://packagist.org/packages/tisuit/skeleton) [![composer.lock available](https://poser.pugx.org/tisuit/skeleton/composerlock)](https://packagist.org/packages/tisuit/skeleton) [![License](https://poser.pugx.org/tisuit/skeleton/license)](https://packagist.org/packages/tisuit/skeleton)

# Table of Contents


<!-- vim-markdown-toc GFM -->

+ [How to use](#how-to-use)
    * [Installation](#installation)
    * [Adding components](#adding-components)
    * [Environment variables](#environment-variables)
    * [Middleware/RBAC](#middlewarerbac)
        - [`rbac.php` config file](#rbacphp-config-file)
        - [Add it in your app Provider class](#add-it-in-your-app-provider-class)
        - [Add it in middleware list in `suit.php` config](#add-it-in-middleware-list-in-suitphp-config)

<!-- vim-markdown-toc -->

# How to use

## Installation

```bash
composer create-project tisuit/skeleton
```

## Adding components

After install you will have only core package out of the box, but you need at least [HTML](https://github.com/tisuit/html) or [REST](https://github.com/tisuit/rest) packages.

Example:

```bash
composer require tisuit/html
```

Follow setup instructions in package README.md file (in most cases - just add new provider in your `suit.php` config and start using it :)

## Environment variables

Docker image offers following env variables:

* **APP_ENV** - Application environment, usable when you need to define separate config for each environment, eg: for database. Default: dev
* **APP_RELEASE** - Application release to track with Sentry, default: local
* **PHP_OPCACHE_ENABLE** - Enable PHP Opcache. Default: 1

## Middleware/RBAC

Role-Based Access Control.
In most cases you need RBAC in your app, that's why we added it in core package.

### `rbac.php` config file

Place it in your config dir with following structure:

```php
<?php
return [
    'defaultRole' => 'anonymous', //default role for unathorized visitor
    'roleAttribute' => 'role', //role attribute in request object. You MUST place it in request object yourself (after user login, for example)
    'acl' => [ //Access Control List by role
        'anonymous' => [ //List of route patterns, allowed for that role (it's default role, which mean that these patterns allowed for ALL system roles)
            '/',
            '/login',
            '/register',
        ],
        'user' => [ //List of route patterns, allowed ONLY for the 'user' role
            '/profile',
            '/post/add',
        ],
    ],
];
```

### Add it in your app Provider class

RBAC is optional middleware, if you wanna use it, you must add it in your provider class yourself, example:

```php
$container['rbac'] = function ($c) {
    return \App\Middleware\RBAC($c);
};
```

### Add it in middleware list in `suit.php` config

As it was told earlier, it's optional middleware, which means that you must enable it yourself on app level.

Add `rbac` (or any other name, which you gave it on previous step) in `suit.middlewares` list.

We suggest you to add it as first middleware in that list, because in that case it will be loaded last.

Try to use it now :)

