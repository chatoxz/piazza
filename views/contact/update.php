<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */

$this->title = 'Actualizar Contact: ' . $model->id_contact;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_contact, 'url' => ['view', 'id' => $model->id_contact]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="contact-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
