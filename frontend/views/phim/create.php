<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Phim */

$this->title = 'Create Phim';
$this->params['breadcrumbs'][] = ['label' => 'Phims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
