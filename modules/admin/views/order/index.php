<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at',
            'updated_at',
            'qty',
            'sum',
            // 'status',
            [
              'attribute' => 'status',
                'value' => function($data) {
                    return !$data->status ? '<span class="text-danger">Active</span>' : '<span>Aviable</span>';
                },
                'format' => 'html',
            ],

            // 'name',
             'email:email',
            // 'phone',
            // 'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
