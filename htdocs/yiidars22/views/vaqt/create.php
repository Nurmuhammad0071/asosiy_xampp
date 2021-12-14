<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vaqt */

$this->title = 'Create Vaqt';
$this->params['breadcrumbs'][] = ['label' => 'Vaqts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vaqt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
