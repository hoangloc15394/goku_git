<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PhimSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ma_phim') ?>

    <?= $form->field($model, 'ten_phim') ?>

    <?= $form->field($model, 'ten_tieng_anh') ?>

    <?= $form->field($model, 'nam_phat_hanh') ?>

    <?= $form->field($model, 'thoi_luong') ?>

    <?php // echo $form->field($model, 'ma_dao_dien') ?>

    <?php // echo $form->field($model, 'ma_quoc_gia') ?>

    <?php // echo $form->field($model, 'ma_danh_muc') ?>

    <?php // echo $form->field($model, 'mo_ta') ?>

    <?php // echo $form->field($model, 'poster') ?>

    <?php // echo $form->field($model, 'luot_view') ?>

    <?php // echo $form->field($model, 'anh_dai_dien') ?>

    <?php // echo $form->field($model, 'ngay_upload') ?>

    <?php // echo $form->field($model, 'tinh_trang') ?>

    <?php // echo $form->field($model, 'IMDB') ?>

    <?php // echo $form->field($model, 'phim_tag') ?>

    <?php // echo $form->field($model, 'url_trailer') ?>

    <?php // echo $form->field($model, 'url_phim') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
