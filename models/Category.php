<?php
/**
 * Created by PhpStorm.
 * User: devkam
 * Date: 18.06.17
 * Time: 22:39
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }
    public function getProducts() {
        return $this->hasOne(Category::className(),['id' => 'category_íd']);
    }
}