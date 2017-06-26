<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>


<div class="container text-center">
    <div class="logo-404">
        <a href="<?= \yii\helpers\Url::to('/')?>"><img src="/images/home/logo.png" alt="" /></a>
    </div>
    <div class="content-404">
        <img src="/images/404/404.png" class="img-responsive" alt="" />
        <h1><h1><?= Html::encode($this->title) ?></h1></h1>
        <p><?= nl2br(Html::encode($message)) ?> </p>
        <h2><a href="<?= \yii\helpers\Url::to('/')?>">Baş səhifəyə qayıt</a></h2>
        <?php
        debug($sta)

        ?>
    </div>
</div>