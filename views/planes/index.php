<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlanesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Planes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planes-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Planes'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= $this->render('/layouts/menuAdmin') ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_plan',
            //'id_modelos',
            'nombre',
            'descripcion:ntext',
            'adicional:ntext',
            'video',
            [
                'attribute' => 'id',
                'format' => 'html',
                'label' => 'Modelo',
                'value' => function ($data) {
                    return Html::img('/images/planes/' . $data['foto'],
                        ['width' => '200px']);
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
