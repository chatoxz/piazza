<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Novedades */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Novedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="novedades-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_novedades], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_novedades], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el item? la accion es IRREVERSIBLE.'),
                'method' => 'post',
            ],
        ]) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>

    <?php $dir_imagen = '@web/../images/novedades/'.$model->foto;?>
    <?php $dir_imagen2 = '@web/../images/novedades/'.$model->foto2;?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_novedades',
            'titulo',
            'contenido:ntext',
            'contenido2:ntext',
            'subtitulo',
            'autor',
            'fecha',
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
            'foto2',
            [
                'attribute'=>'Foto2',
                'value'=> $dir_imagen2,
                'format' => ['image',[
                    'width'=>'50%',
                    'alt' => 'Sin imagen',
                    'onclick'=> "window.open('../$dir_imagen', '_blank')",
                ]
                ]
            ],
        ],
    ]) ?>

</div>
