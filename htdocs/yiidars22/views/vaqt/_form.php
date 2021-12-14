<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vaqt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vaqt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vaqt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
