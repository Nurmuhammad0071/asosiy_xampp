<?php
	namespace app\controllers;

	use Yii;
	use yii\web\Controller;

	
	class YangiController extends Controller{
		public $layout = 'boshqa';

		public function actionSahifa(){

			return $this->render("page");
		}
	}
?>