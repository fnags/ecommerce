<?php
/**
 * Created by PhpStorm.
 * User: devkam
 * Date: 21.06.17
 * Time: 1:59
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController
{

    public function actionIndex() {
        $hit = Product::find()->where(['hit'=>'1'])->limit(6)->all();
//        debug($hit);
        return $this->render('index',compact('hits'));
    }

}