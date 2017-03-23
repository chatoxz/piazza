<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Planes */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Planes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planes-view  container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id_plan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_plan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>

    <?php $dir_imagen = '@web/../images/planes/'.$model->foto;?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_plan',
            //'id_modelos',
            'nombre',
            'foto',
            [
                'attribute'=>'Foto',
                'value'=> $dir_imagen,
                'format' => ['image',[
                    'width'=>'50%',
                    'alt' => 'Sin imagen',
                    'onclick'=> "window.open('../$dir_imagen', '_blank')",
                ]
                ]
            ],
            'descripcion:ntext',
            'adicional:ntext',
            'video',
        ],
    ]) ?>

</div>
