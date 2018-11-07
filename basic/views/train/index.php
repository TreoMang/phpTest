<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="train-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Train', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TrainId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
