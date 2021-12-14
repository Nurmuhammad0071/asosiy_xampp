<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Foydalanuvchi */

$this->title = 'Create Foydalanuvchi';
$this->params['breadcrumbs'][] = ['label' => 'Foydalanuvchis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foydalanuvchi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
