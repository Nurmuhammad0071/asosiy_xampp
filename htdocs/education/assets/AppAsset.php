<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        
        'assets/bootstrap/css/bootstrap.min.css',

        'assets/bootstrap/css/bootstrap.min.css',
        'assets/css/templatemo-edu-meeting.css',
        'assets/css/owl.css',
        'assets/css/lightbox.css',


    ];
    public $js = [
        'assets/jquery/jquery.min.js',
        'assets/bootstrap/js/bootstrap.bundle.min.js',
       
        'assets/js/isotope.min.js',
        'assets/js/owl-carousel.js',
        'assets/js/lightbox.js',
        'assets/js/tabs.js',
        'assets/js/video.js',
        'assets/js/slick-slider.js',
        'assets/js/custom.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
