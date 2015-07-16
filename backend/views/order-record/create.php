<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OrderRecord */

$this->title = Yii::t('backend', 'Create Order Record');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Order Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
