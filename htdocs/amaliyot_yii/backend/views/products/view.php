<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:html',
            [
                    'attribute' => 'image',
                    'format' => ['html'],
                    'value' => function () use ($model) {
                        return Html::img($model->getImageUrl(), ['style' => 'width:100px; ']);
                    },


            ],

            'price',
            [
                    'attribute' => 'status',
                    'format' => ['html'],
                    'value' => function () use ($model) {
                        return Html::tag('span', $model->status ? 'active' : 'noactive', [
                            'class' => $model->status ? 'badge badge-success' : 'badge badge-danger'
                        ]);
                    }
],
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
