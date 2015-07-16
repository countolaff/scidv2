<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Parameter */

$this->title = Yii::t('backend', 'Create Parameter');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Parameters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parameter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
