<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/1/2018
 * Time: 9:01 PM
 */
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Station;

class StationController extends Controller{
    public function actionIndex(){
        $query = Station::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);
        $stations =$query->orderBy('StationName')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        return $this->render('index',[
            'stations' => $stations,
            'pagination' => $pagination
        ]);
    }
}