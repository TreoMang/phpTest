<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Seat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SeatId')->textInput() ?>

    <?= $form->field($model, 'CarriageId')->textInput() ?>

    <?= $form->field($model, 'TrainId')->textInput() ?>

    <?= $form->field($model, 'State_')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
