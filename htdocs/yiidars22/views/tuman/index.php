<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TumanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tumen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuman-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tuman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'viloyat_id',
            'tnomi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
