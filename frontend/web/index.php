<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/main.php'),
 	require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/aliases.php'),
    require(__DIR__ . '/../config/main-local.php')
);
$_SERVER['SCRIPT_FILENAME'] = '/home/abhi/php/www/physicsclasses/frontend/web/index.php';
$_SERVER['DOCUMENT_ROOT'] = '/home/abhi/php/www/physicsclasses/frontend/web';
$_SERVER['CONTEXT_DOCUMENT_ROOT'] = '/home/abhi/php/www/physicsclasses/frontend/web';
// echo"<pre>";print_r($_SERVER);die;
(new yii\web\Application($config))->run();
