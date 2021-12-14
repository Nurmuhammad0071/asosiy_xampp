<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            [
                    'attribute' => 'id',
                    'contentOptions' => ['style' => 'width:50px;'],

],
            [
                'label' => 'image',
                'content' => function($model){
                    /** @var\common\models\Products $model */
                    return Html::img($model->getImageUrl(),['style'=>'width:50px; ']);

                }
            ],
            'name',

            'price',
            [
                    'attribute'  =>'status',
                    'content' => function($model){
        return Html::tag('span',$model->status? 'active' : 'noactive', [
                'class' => $model->status ? 'badge badge-success' : 'badge badge-danger'
                ] );
                    }
],
            [
                    'attribute' =>'create',
                    'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space:nowrap;']


],
            [
                'attribute' =>'update_at',
                'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space:nowrap;']


            ],
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
