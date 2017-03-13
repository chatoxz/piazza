<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fotos */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Fotos',
]) . $model->id_fotos;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fotos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_fotos, 'url' => ['view', 'id' => $model->id_fotos]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="fotos-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
