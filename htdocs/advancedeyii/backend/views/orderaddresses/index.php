<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OrderaddressesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-addresses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order Addresses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'address',
            'city',
            'state',
            'country',
            //'zipcode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
