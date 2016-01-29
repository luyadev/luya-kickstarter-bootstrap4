<?php

namespace app\assets;

class ResourcesAsset extends \luya\web\Asset
{
    public $sourcePath = '@app/resources';
    
    public $css = [
        'dist/css/main.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}