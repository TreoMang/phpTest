<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/1/2018
 * Time: 2:12 PM
 */
use yii\helpers\Html;
?>
<p>Bạn đã nhập với những thông tin như sau:</p>
<ul>
    <li><label>Name</label>:<?= Html::encode($model->name)?></li>
    <li><label>Email</label>:<?= Html::encode($model->email)?></li>
</ul>
