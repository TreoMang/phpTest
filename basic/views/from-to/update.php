<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FromTo */

$this->title = 'Update From To: ' . $model->FTid;
$this->params['breadcrumbs'][] = ['label' => 'From Tos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FTid, 'url' => ['view', 'id' => $model->FTid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="from-to-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
