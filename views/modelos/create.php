<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Modelos */

$this->title = 'Crear Modelos';
$this->params['breadcrumbs'][] = ['label' => 'Modelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modelos-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
