<?php
/**
 * Created by PhpStorm.
 * User: devkam
 * Date: 23.06.17
 * Time: 23:07
 */

namespace app\controllers;


use app\models\Articles;

class BlogController extends AppController
{
    public function actionIndex() {
        $this->setMeta('E_SHOPPER |');
        $articles = Articles::find()->limit(4)->all();
        return $this->render('index',compact('articles'));
    }
}