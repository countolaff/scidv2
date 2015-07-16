<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Freight */

$this->title = Yii::t('backend', 'Create Freight');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Freights'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="freight-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
