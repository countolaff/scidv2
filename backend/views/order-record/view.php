<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderRecord */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Order Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id, 'order_id' => $model->order_id, 'order_detail_order_id' => $model->order_detail_order_id, 'order_detail_order_product_id' => $model->order_detail_order_product_id, 'order_detail_order_id1' => $model->order_detail_order_id1, 'order_detail_order_product_id1' => $model->order_detail_order_product_id1], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id, 'order_id' => $model->order_id, 'order_detail_order_id' => $model->order_detail_order_id, 'order_detail_order_product_id' => $model->order_detail_order_product_id, 'order_detail_order_id1' => $model->order_detail_order_id1, 'order_detail_order_product_id1' => $model->order_detail_order_product_id1], [
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
            'approved_by',
            'state',
            'order_id',
            'order_detail_order_id',
            'order_detail_order_product_id',
            'order_detail_order_id1',
            'order_detail_order_product_id1',
        ],
    ]) ?>

</div>
