<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsadosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usados-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Usados', ['create'], ['class' => 'btn btn-success']) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_usados',
            'nombre',
            //'foto',
            [
                'attribute' => 'img',
                'format' => 'html',
                'label' => 'Foto',
                'value' => function ($data) {
                    return Html::img('/images/nosotros/' . $data['foto'],
                        ['width' => '100px']);
                }
            ],
            'descripcion:ntext',
            'adicional:ntext',
            'video',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
