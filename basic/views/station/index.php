<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/1/2018
 * Time: 9:29 PM
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
foreach ($stations as $station):
?>
<h1>Stations</h1>
    <ul>
        <li>
            <?= Html::encode("{$station->StationName}({$station -> StationId})")?>:
            <?=$station->Address_?>
        </li>
<?php endforeach;?>
    </ul>
<?=LinkPager::widget(['pagination' => $pagination])?>

