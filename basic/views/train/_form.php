<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Train */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="train-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TrainId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
