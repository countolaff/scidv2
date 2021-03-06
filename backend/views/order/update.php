<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Order',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'detail_order_id' => $model->detail_order_id, 'detail_order_product_id' => $model->detail_order_product_id, 'detail_order_id1' => $model->detail_order_id1, 'detail_order_product_id1' => $model->detail_order_product_id1]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
