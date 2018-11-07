<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FareSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fare-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fare', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FareId',
            'FTid',
            'fee',
            'CarriTypeId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
