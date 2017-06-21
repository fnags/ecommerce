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

class CategoryController extends AppController{

    public function actionIndex(){
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E_SHOPPER');
        return $this->render('index', compact('hits'));
    }

    public function actionView($id) {

        $id = Yii::$app->request->get('id');

        $products = Product::find()->where(['category_id' => $id])->all();

        $category = Category::findOne($id);

        $this->setMeta('E_SHOPPER |' . $category->name,$category->keywords);

        return $this->render('view',compact('products'));


    }
}