<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Novedades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="novedades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contenido')->textarea(['rows' => 12]) ?>

    <?= $form->field($model, 'subtitulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput()->input('fecha',['placeholder' => "xxxx-xx-xx"]) ?>

    <table class="table">
        <td>
            <?php //********* IMPORTANTE UNA VARIABLE ESTA CREADA EN LA CLASE PERSONA, public $file con elllla se carga el archivo ?>
            <?= $form->field($model, 'file')->fileInput()->label($model->foto ? $model->foto : '' ) ?>

            <?php
            //DATOS PARA QUE SE VEA LA FOTO
            $dir = \Yii::getAlias('@webroot')."\images\novedades\ ". $model->foto;
            $dir = str_replace(" ","",$dir);
            $options = [
                'width'=>'200px',
                'height'=>'auto',
                'alt' => $model->foto ? $model->foto : 'Sin foto',
            ];
            if($model->foto)
                echo  "<a href = '../images/novedades/".$model->foto."' target='_blank' >".Html::img('@web/../images/novedades/'.$model->foto, $options). "</a>";
            else
                echo "No tiene foto" ;
            //echo '<img src="@web/../images/alumnos/'.$model->foto.'" alt=" ' . $model->foto. ' " /> ';
            //echo $form->field($model, 'foto')->fileInput();
            ?>
        </td>
    </table>

    <table class="table">
        <td>
            <?php //********* IMPORTANTE UNA VARIABLE ESTA CREADA EN LA CLASE PERSONA, public $file con elllla se carga el archivo ?>
            <?= $form->field($model, 'file2')->fileInput()->label($model->foto2 ? $model->foto2 : '' ) ?>

            <?php
            //DATOS PARA QUE SE VEA LA FOTO2
            $dir = \Yii::getAlias('@webroot')."\images\novedades\ ". $model->foto2;
            $dir = str_replace(" ","",$dir);
            $options = [
                'width'=>'200px',
                'height'=>'auto',
                'alt' => $model->foto2 ? $model->foto2 : 'Sin foto2',
            ];
            if($model->foto2)
                echo  "<a href = '/images/novedades/".$model->foto2."' target='_blank' >".Html::img('@web/images/novedades/'.$model->foto2, $options). "</a>";
            else
                echo "No tiene foto2" ;
            //echo '<img src="@web/../images/novedades/'.$model->foto2.'" alt=" ' . $model->foto2. ' " /> ';
            //echo $form->field($model, 'foto2')->fileInput();
            ?>
        </td>
    </table>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
