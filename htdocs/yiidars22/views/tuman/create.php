<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tuman */

$this->title = 'Create Tuman';
$this->params['breadcrumbs'][] = ['label' => 'Tumen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
