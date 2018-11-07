<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FareSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fare-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'FareId') ?>

    <?= $form->field($model, 'FTid') ?>

    <?= $form->field($model, 'fee') ?>

    <?= $form->field($model, 'CarriTypeId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
