<?php
/** @var \common\models\User $user */
/** @var \yii\web\View $this */


use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>
<?php \yii\widgets\Pjax::begin([
        'enablePushState' => false
])?>
<?php if (isset($success) && $success):?>
    <div class="alert alert-success">
        Your address was successfully updated
    </div>
<?php endif;?>
<?php $form = ActiveForm::begin([
    'action' => ['/site/update-account'],
    'options' => [
        'data-pjax' => 1
    ]
]); ?>

<?= $form->field($user, 'username')->textInput(['autofocus' => true]) ?>
<?= $form->field($user, 'email') ?>
<div class="row">
    <div class="col">
        <?= $form->field($user, 'password')->passwordInput() ?>
    </div>
    <div class="col">
        <?= $form->field($user, 'passwordConfirm')->passwordInput() ?>
    </div>
</div>
<div class="form-group">
    <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
</div>

<?php ActiveForm::end(); ?>
<?php \yii\widgets\Pjax::end()?>
