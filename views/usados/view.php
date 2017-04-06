<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usados */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Usados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usados-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_usados], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_usados], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el item? la accion es IRREVERSIBLE.'),
                'method' => 'post',
            ],
        ]) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>
    <?php $dir_imagen = '@web/images/usados/'.$model->foto;?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_usados',
            'nombre',
            'foto',
            [
                'attribute'=>'Foto',
                'value'=> $dir_imagen,
                'format' => ['image',[
                    'width'=>'200',
                    'height'=>'200',
                    'alt' => 'Sin imagen',
                    //no me anda en el servidor no se como hacerlo andar sin el pretty url...
                    //'onclick'=> "window.open('../$dir_imagen', '_blank')",
                ]
                ]
            ],
            'descripcion:ntext',
            'adicional:ntext',
            'video',
        ],
    ]) ?>

</div>
