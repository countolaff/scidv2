<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderRecord */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Order Record',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Order Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'order_id' => $model->order_id, 'order_detail_order_id' => $model->order_detail_order_id, 'order_detail_order_product_id' => $model->order_detail_order_product_id, 'order_detail_order_id1' => $model->order_detail_order_id1, 'order_detail_order_product_id1' => $model->order_detail_order_product_id1]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="order-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
