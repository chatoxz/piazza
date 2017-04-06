<?php

use app\models\Modelos;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Planes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'id_modelos')->textInput() ?>

    <?php echo $form->field($model, 'id_modelos')->label('Modelo de auto')->dropDownList(
    ArrayHelper::map( Modelos::find()->all(), 'id_modelos','nombre')); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'adicional')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <table class="table">
        <tr>Chequee que los nombres siempre sean diferentes para no sobreescribir fotos</tr>
        <tr>
            <td>
                <?php //********* IMPORTANTE UNA VARIABLE ESTA CREADA EN LA CLASE PERSONA, public $file con elllla se carga el archivo ?>
                <?= $form->field($model, 'file')->fileInput()->label($model->foto ? $model->foto : '' ) ?>

                <?php
                //DATOS PARA QUE SE VEA LA FOTO
                $dir = \Yii::getAlias('@webroot')."\images\ planes\ ". $model->foto;
                $dir = str_replace(" ","",$dir);
                $options = [
                    'width'=>'200px',
                    'height'=>'auto',
                    'alt' => $model->foto ? $model->foto : 'Sin foto',
                ];
                if($model->foto)
                    echo  "<a href = 'images/planes/".$model->foto."' target='_blank' >".Html::img('@web/images/planes/'.$model->foto, $options). "</a>";
                else
                    echo "No tiene foto" ;
                //echo '<img src="@web/images/alumnos/'.$model->foto.'" alt=" ' . $model->foto. ' " /> ';
                //echo $form->field($model, 'foto')->fileInput();
                ?>
            </td>
        </tr>
    </table>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Crear') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
