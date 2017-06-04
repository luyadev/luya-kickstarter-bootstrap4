<?php

namespace app\assets;

class ResourcesAsset extends \luya\web\Asset
{
    public $sourcePath = '@app/resources';
    
    public $css = [
        YII_ENV . '/css/main.css'
    ];

    public $js = [
        YII_ENV . '/js/main.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
