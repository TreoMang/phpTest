<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carriage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carriage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CarriageId')->textInput() ?>

    <?= $form->field($model, 'TrainId')->textInput() ?>

    <?= $form->field($model, 'CarriageTypeId')->textInput() ?>

    <?= $form->field($model, 'NumberSeat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
