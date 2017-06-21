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
use yii\data\Pagination;


class ProductController extends AppController
{
    public function actionIndex() {
        $products = Product::find()->all();
        return $this->render('index');
    }
}