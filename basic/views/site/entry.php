<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/1/2018
 * Time: 2:13 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form = ActiveForm::begin();
?>
<?= $form->field($model,'name')->label('your name:')?>
<?= $form->field($model,'email')->label('email address:')?>
<div class="form-group">
    <?= Html::submitButton('Submit',['class' => 'btn btn-primary'])?>
</div>
<?php ActiveForm::end()?>
