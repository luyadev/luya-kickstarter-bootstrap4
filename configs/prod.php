<?php

/**
 * A single config array containing all informations on the production env.
 */

/**
 * Enable or disable the debugging, if those values are deleted YII_DEBUG is false and YII_ENV is prod.
 * The YII_ENV value will also be used to load assets based on enviroment (see assets/ResourcesAsset.php)
 */
define('YII_ENV', 'prod');
defined('YII_DEBUG') or define('YII_DEBUG', false);

return [
    // use the same as prep.php with prod env data.
];
