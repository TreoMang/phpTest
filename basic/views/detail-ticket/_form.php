<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTicket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-ticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TicketId')->textInput() ?>

    <?= $form->field($model, 'BookID')->textInput() ?>

    <?= $form->field($model, 'TrainId')->textInput() ?>

    <?= $form->field($model, 'CarriageId')->textInput() ?>

    <?= $form->field($model, 'SeatId')->textInput() ?>

    <?= $form->field($model, 'ScheduleId')->textInput() ?>

    <?= $form->field($model, 'PassengerName')->textInput() ?>

    <?= $form->field($model, 'Object_')->textInput() ?>

    <?= $form->field($model, 'PassportNumber')->textInput() ?>

    <?= $form->field($model, 'State_')->textInput() ?>

    <?= $form->field($model, 'Fee')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
