<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FromTo */

$this->title = 'Create From To';
$this->params['breadcrumbs'][] = ['label' => 'From Tos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="from-to-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
