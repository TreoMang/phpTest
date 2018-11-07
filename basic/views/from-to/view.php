<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FromTo */

$this->title = $model->FTid;
$this->params['breadcrumbs'][] = ['label' => 'From Tos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="from-to-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->FTid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->FTid], [
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
            'FTid',
            'DeparStation',
            'GoalStation',
            'Howfar',
        ],
    ]) ?>

</div>
