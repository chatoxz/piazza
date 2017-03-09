<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usados */

$this->title = 'Update Usados: ' . $model->id_usados;
$this->params['breadcrumbs'][] = ['label' => 'Usados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_usados, 'url' => ['view', 'id' => $model->id_usados]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usados-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
