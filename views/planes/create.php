<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Planes */

$this->title = Yii::t('app', 'Create Planes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Planes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planes-create  container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
