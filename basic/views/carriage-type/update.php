<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CarriageType */

$this->title = 'Update Carriage Type: ' . $model->CarriageTypeId;
$this->params['breadcrumbs'][] = ['label' => 'Carriage Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CarriageTypeId, 'url' => ['view', 'id' => $model->CarriageTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carriage-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
