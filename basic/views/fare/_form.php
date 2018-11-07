<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fare */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fare-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FareId')->textInput() ?>

    <?= $form->field($model, 'FTid')->textInput() ?>

    <?= $form->field($model, 'fee')->textInput() ?>

    <?= $form->field($model, 'CarriTypeId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
