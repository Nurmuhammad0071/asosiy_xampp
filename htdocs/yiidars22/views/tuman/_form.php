<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Tuman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    	echo $form->field($model, 'viloyat_id')->widget(Select2::classname(), [
    'data' => \yii\helpers\ArrayHelper::map(\app\models\Viloyat::find()->all() , 'id' , 'vnomi'),
    'language' => 'en',
    'options' => ['placeholder' => 'Viloyatni tanlang...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);
    ?>

    <!-- <?= $form->field($model, 'viloyat_id')->dropdownList(\yii\helpers\ArrayHelper::map(\app\models\Viloyat::find()->all(), 'id' , 'vnomi'),['prompt'=>'viloyatni tanlang']) ?> -->

    <?= $form->field($model, 'tnomi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
