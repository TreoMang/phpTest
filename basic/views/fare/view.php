<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fare */

$this->title = $model->FareId;
$this->params['breadcrumbs'][] = ['label' => 'Fares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fare-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->FareId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->FareId], [
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
            'FareId',
            'FTid',
            'fee',
            'CarriTypeId',
        ],
    ]) ?>

</div>
