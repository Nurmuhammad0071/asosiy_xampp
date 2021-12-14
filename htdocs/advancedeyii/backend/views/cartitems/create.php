<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cartitems */

$this->title = 'Create Cartitems';
$this->params['breadcrumbs'][] = ['label' => 'Cartitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cartitems-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
