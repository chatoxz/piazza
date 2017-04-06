<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nosotros */

$this->title = 'Nombre: '.$model->foto;
$this->params['breadcrumbs'][] = ['label' => 'Nosotros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nosotros-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_nosotros], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_nosotros], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el item? la accion es IRREVERSIBLE.'),
                'method' => 'post',
            ],
        ]) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>
    <?php $dir_imagen = '@web/images/nosotros/'.$model->foto;?>
    <?php $href = Url::to(['../web/images/nosotros/'.$model->foto]); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_nosotros',
            'foto',
            [
                'attribute'=>'Foto',
                'value'=> $dir_imagen,
                'format' => ['image',[
                    'width'=>'200',
                    'alt' => 'Sin imagen',
                    //no me anda en el servidor no se como hacerlo andar sin el pretty url...
                    //'onclick'=> "window.open('$href', '_blank')",
                ]
                ]
            ],
        ],
    ]) ?>

</div>
