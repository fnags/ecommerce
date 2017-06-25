<?php
/**
 * Created by PhpStorm.
 * User: devkam
 * Date: 22.06.17
 * Time: 2:26
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;



class ProductController extends AppController
{
    public function actionView($id) {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
//        $product = Product::find()->with('category')->where(['id' => $id]);
        $this->setMeta('E_SHOPPER |' . $product->name,$product->keywords);
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render('view',compact('product','hits'));


    }
}