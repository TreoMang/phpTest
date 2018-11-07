<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carriage */

$this->title = 'Update Carriage: ' . $model->CarriageId;
$this->params['breadcrumbs'][] = ['label' => 'Carriages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CarriageId, 'url' => ['view', 'CarriageId' => $model->CarriageId, 'TrainId' => $model->TrainId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carriage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
