<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nosotros */

$this->title = 'Update Nosotros: ' . $model->id_nosotros;
$this->params['breadcrumbs'][] = ['label' => 'Nosotros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_nosotros, 'url' => ['view', 'id' => $model->id_nosotros]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nosotros-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
