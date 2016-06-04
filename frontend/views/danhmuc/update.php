<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Danhmuc */

$this->title = 'Update Danhmuc: ' . $model->ma_danh_muc;
$this->params['breadcrumbs'][] = ['label' => 'Danhmucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ma_danh_muc, 'url' => ['view', 'id' => $model->ma_danh_muc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="danhmuc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
