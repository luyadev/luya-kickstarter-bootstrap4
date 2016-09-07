# LUYA BOOTSTRAP4 BOILERPLATE

## Installation

```sh
composer create-project luyadev/luya-boilerplate-bootstrap4:^1.0@dev
```

> This will install the current dev-master of LUYA and its modules.

## Front-End

### Libraries

These libraries are included and avaible.

[» jQuery (yii\web\JqueryAsset)](http://www.yiiframework.com/doc-2.0/yii-web-jqueryasset.html)  
[» Bootstrap v4-alpha2 (CSS & JS)](http://v4-alpha.getbootstrap.com/)

### Compiling

We have created our own NPM Package that includes our gulp workflow.  
Inside the `resources/` folder, everything is prepared.

See [zephir/zephir-gulp-workflow](https://github.com/zephir/zephir-gulp-workflow) for a full documentation of the workflow.

# Backend

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