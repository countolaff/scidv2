<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Freight */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Freight',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Freights'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="freight-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
