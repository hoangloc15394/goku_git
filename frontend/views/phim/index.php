<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PhimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phim', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ma_phim',
            'ten_phim:ntext',
            // 'ten_tieng_anh',
            // 'nam_phat_hanh',
            // 'thoi_luong',
            // 'ma_dao_dien',
            // 'ma_quoc_gia',
            // 'ma_danh_muc',
            // 'mo_ta:ntext',
             //'poster',
            // 'luot_view',
             // 'anh_dai_dien',
             [
            'attribute' => 'anh_dai_dien',
            'format' => 'raw',
            'label' => 'Anh Dai Dien',
            'value' => function ($data) {
                return Html::img('/advanced/frontend/img/anhdaidien/' . $data['anh_dai_dien'],
                    ['width' => '60px']);
            },
                ],
               [
            'attribute' => 'poster',
            'format' => 'raw',
            'label' => 'poster',
            'value' => function ($data) {
                return Html::img('/advanced/frontend/img/poster/' . $data['poster'],
                    ['width' => '120px']);
            },
                ],
            // 'ngay_upload',
            // 'tinh_trang:ntext',
            // 'IMDB:ntext',
            // 'phim_tag',
            // 'url_trailer:url',
            // 'url_phim:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
