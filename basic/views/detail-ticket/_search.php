<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTicketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-ticket-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'TicketId') ?>

    <?= $form->field($model, 'BookID') ?>

    <?= $form->field($model, 'TrainId') ?>

    <?= $form->field($model, 'CarriageId') ?>

    <?= $form->field($model, 'SeatId') ?>

    <?php // echo $form->field($model, 'ScheduleId') ?>

    <?php // echo $form->field($model, 'PassengerName') ?>

    <?php // echo $form->field($model, 'Object_') ?>

    <?php // echo $form->field($model, 'PassportNumber') ?>

    <?php // echo $form->field($model, 'State_') ?>

    <?php // echo $form->field($model, 'Fee') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
