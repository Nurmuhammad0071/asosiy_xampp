<?php
/** @var \common\models\User $user */
/** @var \common\models\UserAddresses $userAdress */
/** @var \yii\web\View $this */


use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Address Information
            </div>

<?php echo $this->render('user_address',[
        'userAddress' => $userAdress
]);?>


        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                Account information
            </div>
            <?php \yii\widgets\Pjax::begin([
                'enablePushState' => false
            ])?>

            <?php echo $this->render('user_account' ,[
                'user' => $user
            ])?>
            <?php \yii\widgets\Pjax::end()?>
    </div>
    </div>
</div>