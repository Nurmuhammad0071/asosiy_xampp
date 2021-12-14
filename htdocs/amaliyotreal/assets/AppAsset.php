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
        'assets/css/bootstrap.min.css',
        'assets/css/owl.carousel.min.css',
        'assets/css/slicknav.css',
        'assets/css/flaticon.css',
        'assets/css/animate.min.css',
        'assets/css/animate.min.css',
        'assets/css/themify-icons.css',
        'assets/css/slick.css',
        'assets/css/nice-select.css',
        'assets/css/style.css',

    ];
    public $js = [
     './assets/js/owl.carousel.min.js"',
     './assets/js/slick.min.js',   
     './assets/js/wow.min.js',
     './assets/js/animated.headline.js',

     './assets/js/jquery.magnific-popup.js',
     './assets/js/jquery.nice-select.min.js',

     'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js',
     './assets/js/contact.js',

 './assets/js/jquery.form.js',

 './assets/js/jquery.validate.min.js',

 './assets/js/mail-script.js',

 './assets/js/jquery.ajaxchimp.min.js',

 './assets/js/plugins.js',

 './assets/js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
