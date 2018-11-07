<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fare */

$this->title = 'Create Fare';
$this->params['breadcrumbs'][] = ['label' => 'Fares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fare-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
