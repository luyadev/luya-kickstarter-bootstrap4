<?php $this->beginPage(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Luya &mdash; <?= $this->title; ?></title>

        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

        <!-- Just some sample bootstrap contents -->
        <!-- Delete these if you start your project -->
        <div class="container">

            <div class="jumbotron m-t-2">
                <h1 class="display-1">Installation erfolgreich!</h1>
                <p class="lead">All content you see on this page is static. Just delete it in <code>main.php</code> under <code>views/layouts</code>.</p>
                <p class="lead">
                    <a class="btn btn-success btn-lg" href="<?= $this->publicHtml ?>/admin" role="button" target="_blank">» Admin</a>
                </p>
            </div>

            <div class="card-columns">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://placeholdit.imgix.net/~text?txtsize=30&txt=PLACEHOLDER&w=500&h=150" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title that wraps to a new line</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card card-block">
                    <blockquote class="card-blockquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>
                            <small class="text-muted">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://placeholdit.imgix.net/~text?txtsize=30&txt=PLACEHOLDER&w=500&h=150" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card card-block card-inverse card-primary text-xs-center">
                    <blockquote class="card-blockquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                        <footer>
                            <small>
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card card-block text-xs-center">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <div class="card">
                    <img class="card-img img-fluid" src="https://placeholdit.imgix.net/~text?txtsize=30&txt=PLACEHOLDER&w=500&h=300" alt="Card image">
                </div>
                <div class="card card-block text-xs-right">
                    <blockquote class="card-blockquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>
                            <small class="text-muted">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

        </div>
        <!-- / End of samples -->

        <div class="container">
            <?= $content ?>
        </div>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>