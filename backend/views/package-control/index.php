<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PackageControlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Package Controls');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="package-control-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('backend', 'Create Package Control'), ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'observation',
            // 'state',
            // 'freight_id',
            // 'order_id',
            // 'order_detail_order_id',
            // 'order_detail_order_product_id',
            // 'order_detail_order_id1',
            // 'order_detail_order_product_id1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
