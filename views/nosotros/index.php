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
        <?= Html::a('Crear Nosotros', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Modelos',  ['modelos/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Contactos',['contact/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Nosotros', ['nosotros/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Usados',   ['usados/index'], ['class' => 'btn btn-info']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_nosotros',
            'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
