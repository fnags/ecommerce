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
use app\models\Cart;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController{

    public function actionIndex(){
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E_SHOPPER');
        return $this->render('index', compact('hits'));
    }

    public function actionView($id) {

        $id = Yii::$app->request->get('id');

        $category = Category::findOne($id);

        if (empty($category)) { // item does not exist
            throw new \yii\web\HttpException(404, 'Гфывф');
        }

//        $products = Product::find()->where(['category_id' => $id])->all();
        $query = Product::find()->where(['category_id' => $id]);

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3,'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();



        $this->setMeta('E_SHOPPER |' . $category->name,$category->keywords);

        return $this->render('view',compact('pages','products'));


    }

    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('E-SHOPPER | Поиск: ' . $q);
        if(!$q)
            return $this->render('search'); 
        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }
}