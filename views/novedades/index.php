<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NovedadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Novedades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="novedades-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Novedades', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Modelos',  ['modelos/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Contactos',['contact/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Nosotros', ['nosotros/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Usados',   ['usados/index'], ['class' => 'btn btn-info']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_novedades',
            'titulo',
            'contenido:ntext',
            'subtitulo',
            'autor',
            // 'fecha',
            // 'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>