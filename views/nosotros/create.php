<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nosotros */

$this->title = 'Create Nosotros';
$this->params['breadcrumbs'][] = ['label' => 'Nosotros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nosotros-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
