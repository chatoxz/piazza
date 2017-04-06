<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p >
        <?= Html::a('Crear usuarios', ['signup'], ['class' => 'btn btn-success']) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
           // 'auth_key',
           // 'password_hash',
            //'password_reset_token',
            // 'email:email',
            // 'status',
            // 'role',
            // 'created_at',
            // 'updated_at',

            //['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                //'header'=>'Mod/Detalle/Borrar',
                'header'=>'Acciones',
                'headerOptions' => ['width' => '120'],
                'template' => '{view}',
                'buttons' => [
                    'view' => function ($model,$key,$index) {
                        //$url = "?r=user%2Fview?id=".$key->id;
                        $url = "user/view";
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-eye-open"></span>', [$url, 'id'=> $key->id ]);
                    },
                    'update' => function ($model,$key,$index) {
                        $url = "/user/update";
                        return Html::a(
                            '<span style="padding-right: 10px;" class="glyphicon glyphicon-pencil"></span>', [$url, 'id'=> $key->id ]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
