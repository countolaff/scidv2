<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('backend', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customerid',
            'name',
            'description',
            'created_at',
            // 'updated_at',
            // 'assigned_user',
            // 'deleted',
            // 'created_by',
            // 'updated_by',
            // 'quantity_purchased',
            // 'amount_sold',
            // 'remaining_amount',
            // 'unit_id',
            // 'price',
            // 'image',
            // 'size',
            // 'color',
            // 'detail_order_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
