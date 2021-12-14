<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UseraddressesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Useraddresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useraddresses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Useraddresses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'address',
            'city',
            'state',
            //'country',
            //'zipcode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
