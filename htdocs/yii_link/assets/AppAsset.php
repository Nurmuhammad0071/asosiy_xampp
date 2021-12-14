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
        
        
  
  "assets/img/favicon.png",
  "assets/img/apple-touch-icon.png",
    "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i",

 "assets/vendor/bootstrap/css/bootstrap.min.css",
  "assets/vendor/bootstrap-icons/bootstrap-icons.css",
  "assets/vendor/aos/aos.css",
  "assets/vendor/remixicon/remixicon.css",
  "assets/vendor/swiper/swiper-bundle.min.css",
  "assets/vendor/glightbox/css/glightbox.min.css",


  "assets/css/style.css",
    ];
    public $js = [
    "assets/vendor/bootstrap/js/bootstrap.bundle.js",
      "assets/vendor/aos/aos.js",
      "assets/vendor/php-email-form/validate.js",
      "assets/vendor/swiper/swiper-bundle.min.js",
      "assets/vendor/purecounter/purecounter.js",
      "assets/vendor/isotope-layout/isotope.pkgd.min.js",
      "assets/vendor/glightbox/js/glightbox.min.js",
      "assets/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',

    ];
}
