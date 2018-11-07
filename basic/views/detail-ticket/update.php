<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTicket */

$this->title = 'Update Detail Ticket: ' . $model->BookID;
$this->params['breadcrumbs'][] = ['label' => 'Detail Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BookID, 'url' => ['view', 'BookID' => $model->BookID, 'TicketId' => $model->TicketId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-ticket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
