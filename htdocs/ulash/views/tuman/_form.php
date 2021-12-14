<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tuman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tnomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'viloyatid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
