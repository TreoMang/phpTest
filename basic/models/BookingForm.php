<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/1/2018
 * Time: 1:58 PM
 */
namespace app\models;
use yii\base\Model;

class BookingForm extends Model{
    public $start_station;
    public $goal_station;

    public $ticket_type;
    public $num_adult;
    public $num_children;
    public $start_date;
    public $finish_date;
    public $seat_type;

    public function rules(){
        return [
            [['start_station','goal_station','ticket_type','num_adult','num_children','start_date','finish_date','seat_type'],'required']
            //[['start_station','goal_station'],'required']
        ];
    }
}