<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bookticket */

$this->title = 'Create Bookticket';
$this->params['breadcrumbs'][] = ['label' => 'Booktickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookticket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
