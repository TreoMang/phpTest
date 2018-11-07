<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bookticket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bookticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'BookID')->textInput() ?>

    <?= $form->field($model, 'NumberTicket')->textInput() ?>

    <?= $form->field($model, 'Total_amount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
