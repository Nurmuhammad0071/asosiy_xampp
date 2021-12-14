<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
?>


<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'user']
            ]); ?>

            <?= $form->field($model, 'username',['inputOptions'=>['class'=>'form-control form-control-user',
                'placeholder'=>'Loginni kiriting']])->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password',['inputOptions'=>['class'=>'form-control form-control-user',
                'placeholder'=>'Parolni kiriting']])->passwordInput() ?>

            <?= $form->field($model, 'rememberMe',['inputOptions'=>['class'=>'form-control form-control-user']])->checkbox() ?>


            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-user', 'name' => 'login-button']) ?>

            <hr>
            <a href="index.html" class="btn btn-google btn-user btn-block">
                <i class="fab fa-google fa-fw"></i> Login with Google
            </a>
            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
            </a>
            <?php ActiveForm::end(); ?>
            <hr>
            <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="register.html">Create an Account!</a>
            </div>
        </div>
    </div>
</div>
