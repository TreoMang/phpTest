<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bookticket */

$this->title = 'Update Bookticket: ' . $model->BookID;
$this->params['breadcrumbs'][] = ['label' => 'Booktickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BookID, 'url' => ['view', 'id' => $model->BookID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bookticket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
