<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Viloyat */

$this->title = 'Create Viloyat';
$this->params['breadcrumbs'][] = ['label' => 'Viloyats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viloyat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
