<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;


class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}