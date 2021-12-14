<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Yangliklar */

$this->title = 'Create Yangliklar';
$this->params['breadcrumbs'][] = ['label' => 'Yangliklars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yangliklar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
