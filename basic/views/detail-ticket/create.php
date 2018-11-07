<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DetailTicket */

$this->title = 'Create Detail Ticket';
$this->params['breadcrumbs'][] = ['label' => 'Detail Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-ticket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
