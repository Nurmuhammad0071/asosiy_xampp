<?php
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Yangliklar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yangliklar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sarlavhe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matn')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);
 ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
