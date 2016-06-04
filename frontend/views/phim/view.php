<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phim */

$this->title = $model->ma_phim;
$this->params['breadcrumbs'][] = ['label' => 'Phims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phim-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ma_phim], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ma_phim], [
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
            'ma_phim',
            'ten_phim',
            'ten_tieng_anh',
            'nam_phat_hanh',
            'thoi_luong',
            'ma_dao_dien',
            'ma_quoc_gia',
            'ma_danh_muc',
            'mo_ta:ntext',
            // 'poster',
            [
                'label'=>'poster',
                'format'=>'raw',
                'value'=>Html::img('/advanced/frontend/img/poster/'.$model->poster,['width'=>'100px']),
            ],
            'luot_view',
            // 'anh_dai_dien',
            [
                'label'=>'anh_dai_dien',
                'format'=>'raw',
                'value'=>Html::img('/advanced/frontend/img/anhdaidien/'.$model->anh_dai_dien,['width'=>'100px']),
           ],
            'ngay_upload',
            'tinh_trang:ntext',
            'IMDB:ntext',
            'phim_tag',
            'url_trailer:url',
            'url_phim:url',
        ],
    ]) ?>

</div>
