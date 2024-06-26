<?php

namespace app\models;

use yii\db\ActiveRecord;

class Evaluation extends ActiveRecord
{
    public static function tableName()
    {
        return 'saw_evaluations';
    }

    public function rules()
    {
        return [
            [['id_alternative', 'id_criteria', 'value'], 'required'],
            [['id_alternative', 'id_criteria'], 'integer'],
            [['value'], 'number'],
        ];
    }
}