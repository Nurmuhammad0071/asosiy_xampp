<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Foydalanuvchi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foydalanuvchi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ism')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'viloyat')->widget(Select2::classname(), [
    'data' => \yii\helpers\ArrayHelper::map(\app\models\Viloyat::find()->all() , 'id' , 'vnomi'),
    'language' => 'en',
    'options' => ['placeholder' => 'Viloyatni tanlang...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

    <?= $form->field($model, 'tuman')->widget(Select2::classname(), [
    'data' => \yii\helpers\ArrayHelper::map(\app\models\Tuman::find()->all() , 'id' , 'tnomi'),
    'language' => 'en',
    'options' => ['placeholder' => 'Tuman tanlang...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
