<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup container">
    </br></br></br></br>
    <p>
        <?= Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Modelos',  ['modelos/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Contactos',['contact/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Fotos Nosotros', ['nosotros/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Usados',   ['usados/index'], ['class' => 'btn btn-info']) ?>         
        <?= Html::a('Index fotos', ['fotos/index?id_tipo=3'], ['class' => 'btn btn-info']) ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>Llene los siguientes campos para crear un usuario.</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->label('Nombre de usuario') ?>

            <?php // echo $form->field($model, 'email')->label('Email') ?>

            <?= $form->field($model, 'password')->passwordInput()->label('Contraseña') ?>

            <div class="form-group">
                <?= Html::submitButton('Crear usuario', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
