# TiSuit Skeleton

[![Build Status](https://travis-ci.org/TiSuit/skeleton.svg?branch=master)](https://travis-ci.org/TiSuit/skeleton) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/4244583f-be05-49a6-b742-9ad21ce30499/mini.png)](https://insight.sensiolabs.com/projects/4244583f-be05-49a6-b742-9ad21ce30499) [![Latest Stable Version](https://poser.pugx.org/tisuit/skeleton/version)](https://packagist.org/packages/tisuit/skeleton) [![Latest Unstable Version](https://poser.pugx.org/tisuit/skeleton/v/unstable)](//packagist.org/packages/tisuit/skeleton) [![Total Downloads](https://poser.pugx.org/tisuit/skeleton/downloads)](https://packagist.org/packages/tisuit/skeleton) [![Monthly Downloads](https://poser.pugx.org/tisuit/skeleton/d/monthly)](https://packagist.org/packages/tisuit/skeleton) [![composer.lock available](https://poser.pugx.org/tisuit/skeleton/composerlock)](https://packagist.org/packages/tisuit/skeleton) [![License](https://poser.pugx.org/tisuit/skeleton/license)](https://packagist.org/packages/tisuit/skeleton)

# Table of Contents


<!-- vim-markdown-toc GFM -->

+ [How to use](#how-to-use)
    * [Installation](#installation)
    * [Adding components](#adding-components)

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
