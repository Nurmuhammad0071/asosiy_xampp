<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ckeditor */

$this->title = 'Create Ckeditor';
$this->params['breadcrumbs'][] = ['label' => 'Ckeditors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ckeditor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
