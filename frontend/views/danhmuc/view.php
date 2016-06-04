<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Danhmuc */

$this->title = $model->ma_danh_muc;
$this->params['breadcrumbs'][] = ['label' => 'Danhmucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="danhmuc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ma_danh_muc], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ma_danh_muc], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ma_danh_muc',
            'ten_danh_muc',
        ],
    ]) ?>

</div>
