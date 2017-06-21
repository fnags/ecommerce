<?php
/**
 * Created by PhpStorm.
 * User: devkam
 * Date: 21.06.17
 * Time: 2:00
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller
{
    protected function setMeta($title = "E_SHOPPER", $keywords = null , $description = null) {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords','content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description','content' => "$description"]);
    }
}