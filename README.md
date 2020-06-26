<p align="center">
  <img src="https://raw.githubusercontent.com/luyadev/luya/master/docs/logo/luya-logo-0.2x.png" alt="LUYA Logo"/>
</p>

# LUYA Bootstrap 4 Kickstarter Application

[![LUYA](https://img.shields.io/badge/Powered%20by-LUYA-brightgreen.svg)](https://luya.io)
[![Total Downloads](https://poser.pugx.org/luyadev/luya-kickstarter-bootstrap4/downloads)](https://packagist.org/packages/luyadev/luya-kickstarter-bootstrap4)
[![License](https://poser.pugx.org/luyadev/luya-kickstarter-bootstrap4/license)](https://packagist.org/packages/luyadev/luya-kickstarter-bootstrap4)

> **Attention:** As of Bootstrap 4, the grid is completely written in FLEX. Check the [Browser Support](http://caniuse.com/#search=flex) to decide if you want to use Bootstrap 4 for your Project.

## Installation

```sh
composer create-project luyadev/luya-kickstarter-bootstrap4
```

## Front-End

### Libraries

These libraries are included and avaible.

[» jQuery (yii\web\JqueryAsset)](http://www.yiiframework.com/doc-2.0/yii-web-jqueryasset.html)  
[» Bootstrap v4-beta (CSS & JS)](http://getbootstrap.com/)

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
