<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Viloyat */

$this->title = 'Update Viloyat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Viloyats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="viloyat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
