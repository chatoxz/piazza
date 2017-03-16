<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoFoto */

$this->title = Yii::t('app', 'Create Tipo Foto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipo Fotos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-foto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
