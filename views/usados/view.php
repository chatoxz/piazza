<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usados */

$this->title = $model->id_usados;
$this->params['breadcrumbs'][] = ['label' => 'Usados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usados-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_usados], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_usados], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_usados',
            'nombre',
            'foto',
            'descripcion:ntext',
            'adicional:ntext',
            'video',
        ],
    ]) ?>

</div>
