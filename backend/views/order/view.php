<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id, 'detail_order_id' => $model->detail_order_id, 'detail_order_product_id' => $model->detail_order_product_id, 'detail_order_id1' => $model->detail_order_id1, 'detail_order_product_id1' => $model->detail_order_product_id1], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id, 'detail_order_id' => $model->detail_order_id, 'detail_order_product_id' => $model->detail_order_product_id, 'detail_order_id1' => $model->detail_order_id1, 'detail_order_product_id1' => $model->detail_order_product_id1], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'customerid',
            'name',
            'description',
            'created_at',
            'updated_at',
            'assigned_user',
            'deleted',
            'created_by',
            'updated_by',
            'total_value',
            'invoice',
            'observation',
            'detail_order_id',
            'detail_order_product_id',
            'detail_order_id1',
            'detail_order_product_id1',
        ],
    ]) ?>

</div>
