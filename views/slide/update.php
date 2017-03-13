<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slide */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Slide',
]) . $model->id_slide;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Slides'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_slide, 'url' => ['view', 'id' => $model->id_slide]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="slide-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
