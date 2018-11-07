<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Train */

$this->title = 'Update Train: ' . $model->TrainId;
$this->params['breadcrumbs'][] = ['label' => 'Trains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TrainId, 'url' => ['view', 'id' => $model->TrainId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="train-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
