<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailTicketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Tickets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-ticket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Ticket', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TicketId',
            'BookID',
            'TrainId',
            'CarriageId',
            'SeatId',
            //'ScheduleId',
            //'PassengerName',
            //'Object_',
            //'PassportNumber',
            //'State_',
            //'Fee',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
