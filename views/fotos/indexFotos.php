<?php

use app\models\Modelos;
use app\models\Usados;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FotosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Fotos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fotos-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo Html::a(Yii::t('app', 'Create Fotos'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Nueva foto', ['fotos/create?id_tipo='.$id_tipo],['class' => 'btn btn-info']) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_fotos',
            [
                'attribute' => 'id',
                'format' => 'html',
                'label' => 'Modelo',
                'value' => function ($data) {
                    if ($data['id_tipo'] == 1){}//no se usa
                    /*if ($data['id_tipo'] == 2){
                        $modelo_auto = Modelos::find()->where(['id_modelos'=> $data['id'] ])->one();
                        return $modelo_auto->nombre;
                    }*/
                    if ($data['id_tipo'] == 3){
                        if($data['id'] == 1)
                            return 'Slider1';
                        else
                            return 'Slider2';
                    }
                    if ($data['id_tipo'] == 4){ 
                        return Html::img('/images/novedades/' . $data['foto'],
                            ['width' => '200px']);
                    }
                    if ($data['id_tipo'] == 5){
                        $modelo_auto = Usados::find()->where(['id_usados'=> $data['id'] ])->one();
                        return $modelo_auto->nombre;
                    }
                },
            ],
            /*
             [
                 //hace referencia a  public function attributeLabels()
                 'attribute'=>'id_tipo',
                 'label'=>'Tipo',
                 'value'=>'idTipo.nombre',
             ],
                 'attribute' => 'img',
                 'format' => 'html',
                 'label' => 'Tipo',
                 'value' => function ($data) {
                     if ($data['id_tipo'] == 1){
                         return 'Slide';
                     }
                     if ($data['id_tipo'] == 2){
                         return 'Modelos';
                     }
                     if ($data['id_tipo'] == 3){
                         return 'Nosotros';
                     }
                 },
             ],*/
            [
                'attribute' => 'foto',
                'format' => 'html',
                'label' => 'Foto',
                'value' => function ($data) {
                    /*return Html::img('/images/'.$data['nombre'].'/' . $data['foto'],
                        ['width' => '100px']);*/

                    if ($data['id_tipo'] == 1){
                        return Html::img('/images/nosotros/' . $data['foto'],
                            ['width' => '200px']);
                    }
                    if ($data['id_tipo'] == 2){
                        return Html::img('/images/modelos/' . $data['foto'],
                            ['width' => '200px']);
                    }
                    if ($data['id_tipo'] == 3){
                        return Html::img('/images/index/' . $data['foto'],
                            ['width' => '200px']);
                    }
                    if ($data['id_tipo'] == 4){
                        return Html::img('/images/novedades/' . $data['foto'],
                            ['width' => '200px']);
                    }
                    if ($data['id_tipo'] == 5){
                        return Html::img('/images/usados/' . $data['foto'],
                            ['width' => '200px']);
                    }
                },
            ],
            'link',
            'orden',
            [
                'class' => 'yii\grid\ActionColumn',
                //'header'=>'Mod/Detalle/Borrar',
                'header'=>'Acciones',
                'headerOptions' => ['width' => '120'],
                'template' => '{update}{delete}',
                'buttons' => [
                    'update' => function ($model,$key,$index) {
                        $url = "/fotos/update?id_fotos=".$key->id_fotos;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-pencil"></span>', $url);
                    },
                    'delete' => function ($model,$key,$index) {
                        $url = "/fotos/delete?id_fotos=".$key->id_fotos;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-trash"></span>', $url);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
