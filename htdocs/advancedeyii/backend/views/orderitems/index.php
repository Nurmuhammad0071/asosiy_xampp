<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OrderitemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orderitems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderitems-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orderitems', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_name',
            'product_id',
            'unit_price',
            'order_id',
            //'quantity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
