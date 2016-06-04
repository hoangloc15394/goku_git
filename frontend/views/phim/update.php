<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phim */

$this->title = 'Update Phim: ' . $model->ma_phim;
$this->params['breadcrumbs'][] = ['label' => 'Phims', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ma_phim, 'url' => ['view', 'id' => $model->ma_phim]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
