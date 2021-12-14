<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'assets/vendors/mdi/css/materialdesignicons.min.css',
        'assets/vendors/flag-icon-css/css/flag-icon.min.css',
        'assets/vendors/css/vendor.bundle.base.css',
        'assets/vendors/font-awesome/css/font-awesome.min.css',
        'assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css',
        'assets/css/style.css',
        'assets/images/favicon.png',
    ];
    public $js = [
        'assets/vendors/js/vendor.bundle.base.js',
        'assets/vendors/chart.js/Chart.min.js',
        'assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js',
        'assets/vendors/flot/jquery.flot.js',
        'assets/vendors/flot/jquery.flot.resize.js',
        'assets/vendors/flot/jquery.flot.categories.js',
        'assets/vendors/flot/jquery.flot.fillbetween.js',
        'assets/vendors/flot/jquery.flot.stack.js',
        'assets/vendors/flot/jquery.flot.pie.js',
        'assets/js/off-canvas.js',
        'assets/js/hoverable-collapse.js',
        'assets/js/misc.js',
        "assets/js/dashboard.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
