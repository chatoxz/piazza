<?php

use app\models\Modelos;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fotos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fotos-form">

    <?php
    if($model->isNewRecord ){
        $form = ActiveForm::begin(['action' =>['create', 'id_tipo' => $id_tipo ], 'method' => 'post',]);
        ?>

        <?php
        if ($id_tipo == 1){
            echo $form->field($model, 'id')->label('Tipo')->dropDownList(['1' => 'Slide nosotros']);
        }
        if ($id_tipo == 2){
            echo $form->field($model, 'id')->label('Modelo')->dropDownList(
                ArrayHelper::map( Modelos::find()->all(), 'id_modelos','nombre'));
        }
        if ($id_tipo == 3){
            echo $form->field($model, 'id')->label('Tipo')->dropDownList(['0' => 'Seleccione Tipo...', '1' => '1er Slide', '2' => '2do Slide']);
        }

        ?>

        <?php echo $form->field($model, 'id_tipo')->textInput() ?>

        <table class="table">
            <tr>Chequee que los nombres siempre sean diferentes para no sobreescribir fotos</tr>
            <tr>
                <td>
                    <?php //********* IMPORTANTE UNA VARIABLE ESTA CREADA EN LA CLASE PERSONA, public $file con elllla se carga el archivo ?>
                    <?= $form->field($model, 'file')->fileInput()->label($model->foto ? $model->foto : '' ) ?>

                    <?php
                    //DATOS PARA QUE SE VEA LA FOTO
                    $dir = \Yii::getAlias('@webroot')."\images\ ".$carpeta. "\ ". $model->foto;
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
            </tr>
        </table>

        <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'orden')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Crear') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end();
    } else{
        $form = ActiveForm::begin(); ?>

        <?php
        if ($model->id_tipo == 1){
            echo $form->field($model, 'id')->label('Tipo')->dropDownList(['1' => 'Slide nosotros']);
        }
        if ($model->id_tipo == 2){
            echo $form->field($model, 'id')->label('Modelo')->dropDownList(
                ArrayHelper::map( Modelos::find()->all(), 'id_modelos','nombre'));
        }
        if ($model->id_tipo == 3){
            echo $form->field($model, 'id')->label('Tipo')->dropDownList(['0' => 'Seleccione Tipo...', '1' => '1er Slide', '2' => '2do Slide']);
        }
        ?>

        <table class="table">
            <tr>Chequee que los nombres siempre sean diferentes para no sobreescribir fotos</tr>
            <tr>
                <td>
                    <?php //********* IMPORTANTE UNA VARIABLE ESTA CREADA EN LA CLASE PERSONA, public $file con elllla se carga el archivo ?>
                    <?= $form->field($model, 'file')->fileInput()->label($model->foto ? $model->foto : '' ) ?>

                    <?php
                    //DATOS PARA QUE SE VEA LA FOTO
                    $dir = \Yii::getAlias('@webroot')."\images\ ".$carpeta. "\ ". $model->foto;
                    $dir = str_replace(" ","",$dir);
                    $options = [
                        'width'=>'200px',
                        'height'=>'auto',
                        'alt' => $model->foto ? $model->foto : 'Sin foto',
                    ];
                    if($model->foto)
                        echo  "<a href = '/images/$carpeta/".$model->foto."' target='_blank' >".Html::img('@web/images/'.$carpeta.'/'.$model->foto, $options). "</a>";
                    else
                        echo "No tiene foto" ;
                    //echo '<img src="@web/../images/alumnos/'.$model->foto.'" alt=" ' . $model->foto. ' " /> ';
                    //echo $form->field($model, 'foto')->fileInput();
                    ?>
                </td>
            </tr>
        </table>
        
        <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'orden')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    <?php } ?>

</div>
