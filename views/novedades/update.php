<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Novedades */

$this->title = 'Actualizar Novedades: ' . $model->id_novedades;
$this->params['breadcrumbs'][] = ['label' => 'Novedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_novedades, 'url' => ['view', 'id' => $model->id_novedades]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="novedades-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
