<?php
/**
 * Created by PhpStorm.
 * User: sibenx
 * Date: 16/2/1
 * Time: 上午1:00
 */

namespace app\views;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
