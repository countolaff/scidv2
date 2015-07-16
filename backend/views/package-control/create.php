<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PackageControl */

$this->title = Yii::t('backend', 'Create Package Control');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Package Controls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="package-control-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
