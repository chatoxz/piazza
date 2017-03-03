<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Modelos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modelos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <table class="table">
        <td>
            <?php //********* IMPORTANTE UNA VARIABLE ESTA CREADA EN LA CLASE PERSONA, public $file con elllla se carga el archivo ?>
            <?= $form->field($model, 'file')->fileInput()->label($model->foto ? $model->foto : '' ) ?>

            <?php
            //DATOS PARA QUE SE VEA LA FOTO 
            $dir = \Yii::getAlias('@webroot')."\images\modelos\ ". $model->foto;
            $dir = str_replace(" ","",$dir);
            $options = [
                'width'=>'200px',
                'height'=>'auto',
                'alt' => $model->foto ? $model->foto : 'Sin foto',
            ];
            if($model->foto)
                echo  "<a href = '../images/modelos/".$model->foto."' target='_blank' >".Html::img('@web/../images/modelos/'.$model->foto, $options). "</a>";
            else
                echo "No tiene foto" ;
            //echo '<img src="@web/../images/alumnos/'.$model->foto.'" alt=" ' . $model->foto. ' " /> ';
            //echo $form->field($model, 'foto')->fileInput();
            ?>
        </td>
    </table>
    
    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'adicional')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
