<?php
	namespace app\models;
	
	
	// class MyForm extends \yii\base\Model
	// {
	// 	public $fistname;
	// 	public $lastname;
	// 	public $email;

	// 	public function rules(){
	// 		return []
	// 	}

		
	// }


	class MyForm extends \yii\base\Model{
		public $firstname;
		public $lastname;
		public $email;
		public $code;
		public $image;

		public function rules(){
			return [
				[['firstname','lastname','email','image'], 'required', 'message' => "{attribute} maydoni to`ldirilmadi"],
				['email','email', 'message' => 'Noto`g`ri e-mail manzili kiritildi'],
				['firstname','string', /*'length'=>[5,12]*/ 'min'=>5 , 'max'=>12 , 'message'=>'5 ta belgidan oshmasligi kerak' , 'tooLong'=>"Ism juda uzun" , 'tooShort'=>"Ism juda qisqa"],
				['lastname','number',/*'message'=>'Bu yerga son kiritish zarur' , 'min'=>5 , 'max'=>20, 'tooSmall'=>"Juda kichik" , 'tooBig'=>'Juda katta'*/],
				['lastname','number'],
				['lastname','string','max'=>5],
				['code','captcha'],
				['image','file','extensions'=>['jpg','png'],'maxSize'=>500000],
			];
		}	

		public function attributeLabels(){
			return [
				'firstname' => "Ism",
				'lastname' => "Familiya",
				'email' => "E-pochta",
			];
		}
	}
?>