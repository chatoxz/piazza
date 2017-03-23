<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NosotrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nosotros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nosotros-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar foto', ['create'], ['class' => 'btn btn-success']) ?>
        <?= $this->render('/layouts/menuAdmin') ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_nosotros',
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
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
