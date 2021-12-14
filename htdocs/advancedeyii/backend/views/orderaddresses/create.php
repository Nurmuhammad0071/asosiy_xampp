<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\orderAddresses */

$this->title = 'Create Order Addresses';
$this->params['breadcrumbs'][] = ['label' => 'Order Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-addresses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
