<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fileimg */

$this->title = 'Update Fileimg: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fileimgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fileimg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>