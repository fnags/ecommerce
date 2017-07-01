<?php
/**
 * Created by PhpStorm.
 * User: devkam
 * Date: 29.06.17
 * Time: 1:08
 */

namespace app\models;


use yii\db\ActiveRecord;

class Articles extends ActiveRecord
{
    public static function tableName()
    {
        return 'blog';
    }
}