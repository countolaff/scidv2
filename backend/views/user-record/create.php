<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserRecord */

$this->title = Yii::t('backend', 'Create User Record');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'User Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
