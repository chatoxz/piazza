<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fotos */

$this->title = $model->id_fotos;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fotos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fotos-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id_fotos], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_fotos], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el item? la accion es IRREVERSIBLE.'),
                'method' => 'post',
            ],
        ]) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>
    <?php
    if ($model->id_tipo == 1){
        $dir_imagen = '@web/../images/planes/'.$model->foto;
    }
    if ($model->id_tipo == 2){
        $dir_imagen = '@web/../images/modelos/'.$model->foto;
    }
    if ($model->id_tipo == 3){
        $dir_imagen = '@web/../images/index/'.$model->foto;
    }
    if ($model->id_tipo == 4){
        $dir_imagen = '@web/../images/novedades/'.$model->foto;
    }
    if ($model->id_tipo == 5){
        $dir_imagen = '@web/../images/usados/'.$model->foto;
    }
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_fotos',
            'id',
            'id_tipo',
            'foto',
            [
                'attribute'=>'Foto',
                'value'=> $dir_imagen,
                'format' => ['image',[
                    'width'=>'200',
                    'height'=>'200',
                    'alt' => 'Sin imagen',
                    'onclick'=> "window.open('../$dir_imagen', '_blank')",
                ]
                ]
            ],
            'orden',
        ],
    ]) ?>

</div>
