<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fare */

$this->title = 'Update Fare: ' . $model->FareId;
$this->params['breadcrumbs'][] = ['label' => 'Fares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FareId, 'url' => ['view', 'id' => $model->FareId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fare-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
