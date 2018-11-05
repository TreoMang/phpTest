<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/1/2018
 * Time: 1:58 PM
 */
namespace app\models;
use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;

    public function rules(){
        return [
            [['name','email'],'required'],
            ['email','email']
        ];
    }
}