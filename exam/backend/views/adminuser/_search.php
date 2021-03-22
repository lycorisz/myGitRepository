<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdminuserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adminuser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'admin_id') ?>

    <?= $form->field($model, 'admin_username') ?>

    <?= $form->field($model, 'admin_password') ?>

    <?= $form->field($model, 'admin_email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
