<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SlideSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Slides');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slide-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Slide'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Modelos',  ['modelos/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Contactos',['contact/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Fotos Nosotros', ['nosotros/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Usados',   ['usados/index'], ['class' => 'btn btn-info']) ?>         
        <?= Html::a('Index fotos', ['fotos/index?id_tipo=3'], ['class' => 'btn btn-info']) ?>
    </p>
    <div class="col-md-6">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_slide',
            'nombre',

            [
                'class' => 'yii\grid\ActionColumn',
                //'header'=>'Mod/Detalle/Borrar',
                'header'=>'Acciones',
                'headerOptions' => ['width' => '120'],
                'template' => '{update}{delete}{fotos}',
                'buttons' => [
                    'view' => function ($model,$key,$index) {
                        $url = "slide/view?id=".$key->id_slide;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-eye-open"></span>', $url);
                    },
                    'update' => function ($model,$key,$index) {
                        $url = "slide/update?id=".$key->id_slide;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-pencil"></span>', $url);
                    },
                    'delete' => function ($model,$key,$index) {
                        $url = "slide/delete?id=".$key->id_slide;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-trash"></span>', $url);
                    },
                    'fotos' => function ($model,$key,$index) {
                        $url = "fotos/index?id=".$key->id_slide;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-picture"></span>', $url);
                    },
                ],
            ],
        ],
    ]); ?>
    </div>
</div>
