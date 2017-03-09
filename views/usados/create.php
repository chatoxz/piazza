<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Usados */

$this->title = 'Create Usados';
$this->params['breadcrumbs'][] = ['label' => 'Usados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usados-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
