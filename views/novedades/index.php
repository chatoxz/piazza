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
        <?= $this->render('/layouts/menuAdmin') ?>


    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_novedades',
            'titulo',
            'contenido:ntext',
            'contenido2:ntext',
            'subtitulo',
            'autor',
            // 'fecha',
            // 'foto',
            [
                'attribute' => 'id',
                'format' => 'html',
                'label' => 'Foto1',
                'value' => function ($data) {
                    return Html::img('/images/novedades/' . $data['foto'],
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'id',
                'format' => 'html',
                'label' => 'Foto2',
                'value' => function ($data) {
                    return Html::img('/images/novedades/' . $data['foto2'],
                        ['width' => '100px']);
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
