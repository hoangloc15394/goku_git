<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DanhmucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danhmucs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="danhmuc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Danhmuc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ma_danh_muc',
            'ten_danh_muc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
