<?php
/**
 * Created by PhpStorm.
 * User: devkam
 * Date: 18.06.17
 * Time: 22:39
 */

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }
    public function getCategory() {
        return $this->hasMany(Category::className(),['id' => 'íd']);
    }
}