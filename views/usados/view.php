<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usados */

$this->title = $model->id_usados;
$this->params['breadcrumbs'][] = ['label' => 'Usados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usados-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_usados], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_usados], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el item? la accion es IRREVERSIBLE.'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Modelos',  ['modelos/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Contactos',['contact/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Fotos Nosotros', ['nosotros/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Usados',   ['usados/index'], ['class' => 'btn btn-info']) ?>        
        <?= Html::a('Index fotos', ['fotos/index?id_tipo=3'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_usados',
            'nombre',
            'foto',
            'descripcion:ntext',
            'adicional:ntext',
            'video',
        ],
    ]) ?>

</div>
