<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTicket */

$this->title = $model->BookID;
$this->params['breadcrumbs'][] = ['label' => 'Detail Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-ticket-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'BookID' => $model->BookID, 'TicketId' => $model->TicketId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'BookID' => $model->BookID, 'TicketId' => $model->TicketId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TicketId',
            'BookID',
            'TrainId',
            'CarriageId',
            'SeatId',
            'ScheduleId',
            'PassengerName',
            'Object_',
            'PassportNumber',
            'State_',
            'Fee',
        ],
    ]) ?>

</div>
