<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PackageControl */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Package Control',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Package Controls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'freight_id' => $model->freight_id, 'order_id' => $model->order_id, 'order_detail_order_id' => $model->order_detail_order_id, 'order_detail_order_product_id' => $model->order_detail_order_product_id, 'order_detail_order_id1' => $model->order_detail_order_id1, 'order_detail_order_product_id1' => $model->order_detail_order_product_id1]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="package-control-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
