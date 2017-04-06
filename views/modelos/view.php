<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Modelos */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Modelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modelos-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['modelos/update', 'id' => $model->id_modelos], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['modelos/delete', 'id' => $model->id_modelos], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el item? la accion es IRREVERSIBLE.'),
                'method' => 'post',
            ],
        ]) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_modelos',
            'nombre',
            [
                'attribute' => 'Convencional',
                'format'=>'raw',
                'value'=> $model->convencionales == 1 ? 'Si' : 'No'
            ],
            //'foto',
            'descripcion:ntext',
            'adicional:ntext',
            'video',
        ],
    ]) ?>

</div>
