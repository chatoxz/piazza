<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nosotros */

$this->title = $model->id_nosotros;
$this->params['breadcrumbs'][] = ['label' => 'Nosotros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nosotros-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_nosotros], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_nosotros], [
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
            'id_nosotros',
            'foto',
        ],
    ]) ?>

</div>
