<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seat */

$this->title = 'Update Seat: ' . $model->CarriageId;
$this->params['breadcrumbs'][] = ['label' => 'Seats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CarriageId, 'url' => ['view', 'CarriageId' => $model->CarriageId, 'SeatId' => $model->SeatId, 'TrainId' => $model->TrainId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
