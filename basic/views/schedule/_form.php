<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ScheduleId')->textInput() ?>

    <?= $form->field($model, 'FTid')->textInput() ?>

    <?= $form->field($model, 'TrainId')->textInput() ?>

    <?= $form->field($model, 'DeparTime')->textInput() ?>

    <?= $form->field($model, 'StopTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
