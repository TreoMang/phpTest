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


<?= $form->field($model,'start_station')->label('Start Station')?>
<?= $form->field($model,'goal_station')->label('Finish Station')?>
<?= $form->field($model,'ticket_type')->label('Ticket Type')?>
<?= $form->field($model,'num_adult')->label('Num Adults')?>
<?= $form->field($model,'num_children')->label('Num Children')?>
<?= $form->field($model,'start_date')->label('Start Date')?>
<?= $form->field($model,'finish_date')->label('Finish Date')?>
<?= $form->field($model,'seat_type')->label('Seat Type')?>


<div class="form-group">
    <?= Html::submitButton('Search',['class' => 'btn btn-primary'])?>
</div>
<?php ActiveForm::end()?>
