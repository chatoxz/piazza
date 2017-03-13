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
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_fotos], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_fotos], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Modelos',  ['modelos/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Contactos',['contact/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Nosotros', ['nosotros/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Usados',   ['usados/index'], ['class' => 'btn btn-info']) ?>         
        <?= Html::a('Slide',   ['slide/index'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_fotos',
            'id',
            'tipo',
            'foto',
        ],
    ]) ?>

</div>
