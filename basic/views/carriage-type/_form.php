<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarriageType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carriage-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CarriageTypeId')->textInput() ?>

    <?= $form->field($model, 'CarriageTypeName')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
