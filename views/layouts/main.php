<?php 

use app\assets\ResourcesAsset;

ResourcesAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->composition->language; ?>">
    <head>
        <title><?= $this->title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="luya.io">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

        <?php if (YII_ENV == "local"): ?>
            <div style="display: block; position: fixed; left: 0; right: 0; top: -2px; bottom: -2px; z-index: 100; pointer-events: none;">
                <div style="position: absolute; left: 0; right: 0; text-align: center; margin: 20px; font-size: 50px; color: #fff; z-index: 1000; text-shadow: 0 0 5px rgba(0, 0, 0, 0.8);">
                    <span class="d-block d-sm-none  d-md-none  d-lg-none  d-xl-none">XS</span>
                    <span class="d-none  d-sm-block d-md-none  d-lg-none  d-xl-none">SM</span>
                    <span class="d-none  d-sm-none  d-md-block d-lg-none  d-xl-none">MD</span>
                    <span class="d-none  d-sm-none  d-md-none  d-lg-block d-xl-none">LG</span>
                    <span class="d-none  d-sm-none  d-md-none  d-lg-none  d-xl-block">XL</span>
                </div>
            </div>
        <?php endif; ?>

        <!-- Sample content -->
        <!-- Delete these if you start your project -->
        <div class="jumbotron custom-example">
            <h1 class="display-3">Installed successfully!</h1>
            <p class="lead mt-2">All content on this page is static. You can delete it in <code>views/layouts/main.php</code>.</p>
            <hr class="my-5">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="<?= $this->publicHtml ?>/admin" role="button">Admin</a>
            </p>
        </div>
        <!-- / End of samples -->

        <div class="container">
            <?= $content ?>
        </div>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
