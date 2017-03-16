<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 13/03/2017
 * Time: 12:51
 */


use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FotosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Fotos slider');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fotos-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Fotos'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Nueva foto', ['fotos/create?id='.$id.'&tipo='.$tipo], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Modelos',  ['modelos/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Contactos',['contact/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Fotos Nosotros', ['nosotros/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Usados',   ['usados/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Index fotos', ['fotos/index?id_tipo=3'], ['class' => 'btn btn-info']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id_fotos',
            //'id',
            //'tipo',
            [
                'attribute' => 'img',
                'format' => 'html',
                'label' => 'Foto',
                'value' => function ($data) {
                    return Html::img('/images/slider/' . $data['foto'],
                        ['width' => '150px']);
                },
            ],
            'foto',
            [
                'class' => 'yii\grid\ActionColumn',
                //'header'=>'Mod/Detalle/Borrar',
                'header'=>'Acciones',
                'headerOptions' => ['width' => '120'],
                'template' => '{update}{delete}',
                'buttons' => [
                    'view' => function ($model,$key,$index) {
                        $url = "/fotos/view?id=".$key->id_fotos;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-eye-open"></span>', $url);
                    },
                    'update' => function ($model,$key,$index) {
                        $url = "/fotos/update?id=".$key->id_fotos;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-pencil"></span>', $url);
                    },
                    'delete' => function ($model,$key,$index) {
                        $url = "/fotos/delete?id=".$key->id_fotos;
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-trash"></span>', $url);
                    }
                ],
            ],
        ],
    ]); ?>
</div>

