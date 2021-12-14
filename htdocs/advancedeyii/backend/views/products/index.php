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
            // ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id',
                'contentOptions' =>[
                    'style' => 'width:60px;'
                ]

                ],
                //'attribute' => 'id', - bu bazadagi '...'olib beradi 
                //  Css kod yozish uchun 'contentOptions' =>[
                    // 'style' => 'width:60px;'

            
            'name',
            // 'description:ntext',
            [   'attribute' => 'image',
            'content' => function($model){
                /** @var \common\models\Product $model */
                return Html::img($model->getImageUrl() , ['style' => 'width:100px']);
            }
        ],;=]   
            'price',
            [
                'attribute' => 'satus',
                'content' => function($model){
                    return HTML::tag('span',$model->status ? 'Faol' : 'Nofaol' , [
                        'class' => $model->status ? 'badge badge-success' : 'badge badge-danger'
                    ]); 
                }
            ],
            [
                'attribute' => 'created_at',
                'format' => 'datetime',
                'contentOptions' => [
                    'style' => 'white-space:nowrap'
                ]

                ],
                [
                    'attribute' => 'updated_at',
                    'format' => 'datetime',
                    'contentOptions' => [
                        'style' => 'white-space:nowrap'
                    ]
    
                    ],
            //'status',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
