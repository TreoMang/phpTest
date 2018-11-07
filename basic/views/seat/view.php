<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Seat */

$this->title = $model->CarriageId;
$this->params['breadcrumbs'][] = ['label' => 'Seats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'CarriageId' => $model->CarriageId, 'SeatId' => $model->SeatId, 'TrainId' => $model->TrainId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'CarriageId' => $model->CarriageId, 'SeatId' => $model->SeatId, 'TrainId' => $model->TrainId], [
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
            'SeatId',
            'CarriageId',
            'TrainId',
            'State_',
        ],
    ]) ?>

</div>
