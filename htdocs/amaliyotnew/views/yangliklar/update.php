<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Yangliklar */

$this->title = 'Update Yangliklar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yangliklars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yangliklar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
