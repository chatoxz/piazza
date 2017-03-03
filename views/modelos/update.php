<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modelos */

$this->title = 'Update Modelos: ' . $model->id_modelos;
$this->params['breadcrumbs'][] = ['label' => 'Modelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_modelos, 'url' => ['view', 'id' => $model->id_modelos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modelos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
