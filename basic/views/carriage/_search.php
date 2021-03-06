<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarriageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carriage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CarriageId') ?>

    <?= $form->field($model, 'TrainId') ?>

    <?= $form->field($model, 'CarriageTypeId') ?>

    <?= $form->field($model, 'NumberSeat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
