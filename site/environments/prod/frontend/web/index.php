<?php
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require __DIR__ . '/../site/vendor/autoload.php';
require __DIR__ . '/../site/vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../site/common/config/bootstrap.php';
require __DIR__ . '/../site/frontend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../site/common/config/main.php',
    require __DIR__ . '/../site/common/config/main-local.php',
    require __DIR__ . '/../site/frontend/config/main.php',
    require __DIR__ . '/../site/frontend/config/main-local.php'
);

(new yii\web\Application($config))->run();
