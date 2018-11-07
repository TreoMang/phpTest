<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CarriageType */

$this->title = $model->CarriageTypeId;
$this->params['breadcrumbs'][] = ['label' => 'Carriage Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carriage-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CarriageTypeId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CarriageTypeId], [
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
            'CarriageTypeId',
            'CarriageTypeName',
        ],
    ]) ?>

</div>
