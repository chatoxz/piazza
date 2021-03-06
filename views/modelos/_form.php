<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Modelos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modelos-form">

    <?php //$form = ActiveForm::begin(); ?>
    <?php $url = $model->isNewRecord ? 'modelos/create' : 'modelos/update';
    $form = ActiveForm::begin(['action' =>[$url, 'id' => $model->id_modelos,], 'method' => 'post',]); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'adicional')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'convencionales')->label('Convencionales')->dropDownList(['0' => 'No convencionales','1' => 'Convencionales']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
