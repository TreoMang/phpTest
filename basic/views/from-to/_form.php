<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FromTo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="from-to-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FTid')->textInput() ?>

    <?= $form->field($model, 'DeparStation')->textInput() ?>

    <?= $form->field($model, 'GoalStation')->textInput() ?>

    <?= $form->field($model, 'Howfar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
