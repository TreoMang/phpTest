<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/1/2018
 * Time: 2:12 PM
 */
use yii\helpers\Html;
?>
<p>Bạn đã nhập với những thông tin như sau:</p>
<ul>
    <li><label>Start Station</label>:<?= Html::encode($model->start_station)?></li>
    <li><label>Goal Station</label>:<?= Html::encode($model->goal_station)?></li>

    <li><label>Ticket Type</label>:<?= Html::encode($model->ticket_type)?></li>
    <li><label>Num Adults</label>:<?= Html::encode($model->num_adult)?></li>
    <li><label>Num children</label>:<?= Html::encode($model->num_children)?></li>
    <li><label>Start Date</label>:<?= Html::encode($model->start_date)?></li>
    <li><label>Finish Date</label>:<?= Html::encode($model->finish_date)?></li>
    <li><label>Seat Type</label>:<?= Html::encode($model->seat_type)?></li>


</ul>
