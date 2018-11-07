<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CarriageType */

$this->title = 'Create Carriage Type';
$this->params['breadcrumbs'][] = ['label' => 'Carriage Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carriage-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
