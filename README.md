<p align="center">
  <img src="https://raw.githubusercontent.com/luyadev/luya/master/docs/logo/luya-logo-0.2x.png" alt="LUYA Logo"/>
</p>

# LUYA Bootstrap 4 Kickstarter Application

[![LUYA](https://img.shields.io/badge/Powered%20by-LUYA-brightgreen.svg)](https://luya.io)
[![Total Downloads](https://poser.pugx.org/luyadev/luya-kickstarter-bootstrap4/downloads)](https://packagist.org/packages/luyadev/luya-kickstarter-bootstrap4)
[![License](https://poser.pugx.org/luyadev/luya-kickstarter-bootstrap4/license)](https://packagist.org/packages/luyadev/luya-kickstarter-bootstrap4)

[LUYA](https://github.com/luyadev/luya) is a [Yii 2 PHP Framework](https://github.com/yiisoft/yii2) wrapper which provides out of the box functions like an **administration interface**, a beautiful looking **content management system**, **payment** modules, **agency workflows** and other tools to develop your website pretty fast!

> **Attention:** As of Bootstrap 4, the grid is completely written in FLEX. Check the [Browser Support](http://caniuse.com/#search=flex) to decide if you want to use Bootstrap 4 for your Project.

## Installation

We have a made an absolut easy to understand *STEP-BY-STEP* Guide to install LUYA:

+ [How to install](https://luya.io/guide/install)
+ [Video Tutorials](https://luya.io/videos)
+ [How to upgrade current website](https://luya.io/guide/install-upgrade)

### Tl;dr

```sh
composer create-project luyadev/luya-kickstarter-bootstrap4
```

## Frontend

### Libraries

These libraries are included and available:

[» jQuery (yii\web\JqueryAsset)](http://www.yiiframework.com/doc-2.0/yii-web-jqueryasset.html)  
[» Bootstrap v4 (CSS & JS)](http://getbootstrap.com/)

> Bootstrap is included as a composer requirement

### Compiling

We have created our own NPM Package that includes our gulp workflow.  
Everything is prepared inside the `resources/` folder.

See [zephir/zephir-gulp-workflow](https://github.com/zephir/zephir-gulp-workflow) for a full documentation of the workflow.

## Backend

### Assets

To speed up your local development you can uncomment the following lines in `configs/local.php` in order to use symlinking your assets instead of copy them every run.

```php
'assetManager' => [
    'class' => 'luya\web\AssetManager',
    'linkAssets' => true,
],
```

Now all assets will be symlinked and not copied.

> This will also enable CSS instant reload provided by `browserSync` (gulp).

## Questions and Problems

If you have any questions or problems, don't hesitate to create a [new issue](https://github.com/luyadev/luya/issues/new) on the project repository.

+ [Issues on GitHub](https://github.com/luyadev/luya/issues)
+ [Ask us in Gitter](https://gitter.im/luyadev/luya)

### Contribution

We are always looking for people who share their thoughts, code and problems with us. Below the links to the contribution guides:

[Help us building LUYA](https://luya.io/guide/luya-collaboration)
