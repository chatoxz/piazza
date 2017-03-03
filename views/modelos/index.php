<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModelosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modelos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modelos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Modelos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_modelos',
            'nombre',
            'foto',
            'descripcion:ntext',
            'adicional:ntext',
            // 'video',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
