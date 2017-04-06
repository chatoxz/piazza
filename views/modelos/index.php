<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModelosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modelos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modelos-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Modelos', ['modelos/create'], ['class' => 'btn btn-success']) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_modelos',
            'nombre',
            //'foto',
            [
                'attribute' => 'convencionales',
                'format' => 'html',
                'label' => 'convencionales',
                'value' => function ($data) {
                    return $data['convencionales'] == 1 ? 'Si' : 'No';
                },
            ],
            'descripcion:ntext',
            'adicional:ntext',
            'video',

            [
                'class' => 'yii\grid\ActionColumn',
                //'header'=>'Mod/Detalle/Borrar',
                'header'=>'Acciones',
                'headerOptions' => ['width' => '120'],
                'template' => '{view}{update}{delete}{fotos}',
                'buttons' => [
                    'view' => function ($model,$key,$index) {
                        $url = "?r=modelos%2Fview&id=".$key->id_modelos;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-eye-open"></span>', $url);
                    },
                    'update' => function ($model,$key,$index) {
                        $url = "?r=modelos%2Fupdate&id=".$key->id_modelos;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-pencil"></span>', $url);
                    },
                    'delete' => function ($model,$key,$index) {
                        return Html::a('', ['?r=modelos%2Fdelete', 'id' => $key->id_modelos], [
                            'class' => 'glyphicon glyphicon-trash',
                            'data' => [
                                'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el item? la accion es IRREVERSIBLE. ADEMAS SE BORRARAN TODAS LAS FOTOS DEL MODELO'),
                                'method' => 'post',
                            ],
                        ]);
                    },
                    'fotos' => function ($model,$key,$index) {
                        // ?r=novedades%2Fview&id=1
                        $url = "?r=fotos%2Findex&id_tipo=2&id_modelo=".$key->id_modelos;
                        return Html::a(
                            '<span style="padding-right: 10px;padding-left: 10px;" class="glyphicon glyphicon-picture"></span>', $url);
                    },
                ],
            ],
        ],
    ]); ?>
</div>


