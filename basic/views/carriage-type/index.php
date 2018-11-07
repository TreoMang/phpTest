<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarriageTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carriage Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carriage-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carriage Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CarriageTypeId',
            'CarriageTypeName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
