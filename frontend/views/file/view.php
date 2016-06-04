<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fileimg */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fileimgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fileimg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'name',
            [
                 'label'=>'Img',
                 'format'=>'raw',
                 'value'=>Html::img('/advanced/frontend/img/fileimg/'.$model->img,['width'=>'100px']),
           ],
        ],
    ]) ?>

</div>
