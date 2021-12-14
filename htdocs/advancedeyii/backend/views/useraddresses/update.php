<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Useraddresses */

$this->title = 'Update Useraddresses: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Useraddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="useraddresses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
