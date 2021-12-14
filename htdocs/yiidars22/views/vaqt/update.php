<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vaqt */

$this->title = 'Update Vaqt: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vaqts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vaqt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
