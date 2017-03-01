<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 15/02/2017
 * Time: 15:16
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PiazzaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/jquery.bxslider.css',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
    ];
    public $js = [
        //'js/jquery-3.1.1.min.js',
        '//code.jquery.com/jquery-2.2.4.min.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.fitvids.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        'js/jquery.bxslider.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}