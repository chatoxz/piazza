<?php

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Piazza';
?>

<div class="container mod_detalles">
    <div class="col-md-6">
        <h2><?php echo $model->nombre ?></h2>
        <img src="/images/modelos/<?php echo $model->foto ?>" alt="">
        <ul class="nav nav-tabs nav_detalle">
            <li class="active"><a data-toggle="tab"  href="#sectionA" >DESCRIPCION</a></li>
            <li><a data-toggle="tab"  href="#sectionB">INFORMACION ADICIONAL <span>|</span></a></li>
            <li><a href="<?php echo $model->video ?>" target="_blank">VIDEO</a></li>
        </ul>
        <div class="tab-content">
            <div id="sectionA" class="tab-pane fade in active">
                <p>
                    <?php echo $model->descripcion ?>
                </p>
            </div>
            <div id="sectionB" class="tab-pane fade">
                <?php echo $model->adicional ?>
            </div>
            <div id="sectionC" class="tab-pane fade">
            </div>
        </div>
    </div>
    <div class="col-md-6 contact contact_detalle">
        <h3>Envianos tu consulta</h3>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($contacto, 'nombre')->textInput(['maxlength' => true])->input('nombre',['placeholder' => "NOMBRE Y APELLIDO"])->label("") ?>

        <?= $form->field($contacto, 'tel')->textInput(['maxlength' => true])->input('tel',['placeholder' => "TELEFONO / WHATSAPP"])->label("") ?>

        <?= $form->field($contacto, 'domicilio')->textInput(['maxlength' => true])->input('domicilio',['placeholder' => "DOMICILIO"])->label("") ?>

        <?php /*echo $form->field($contacto, 'desde')->label('')
            ->dropDownList([ '06:00' => '06:00', '07:00' =>'07:00', '08:00' => '08:00', '09:00' => '09:00', '10:00' => '10:00',
                '11:00' => '11:00', '12:00' => '12:00', '13:00' => '13:00','14:00' => '14:00',
                '15:00' => '15:00', '16:00' => '16:00', '17:00' => '17:00','18:00' => '18:00',
                '19:00' => '19:00', '20:00' => '20:00', '21:00' => '21:00']);
        // '00:00' => '00:00', '01:00' => '01:00', '02:00' => '02:00' ,'03:00' => '03:00', '04:00' => '04:00','05:00'=> '05:00', ,'22:00' => '22:00',                    '23:00' => '23:00', '24:00' => '24:00'?>
        <span> hasta </span>
        <?php echo $form->field($contacto, 'hasta')->label('')
            ->dropDownList([ '06:00' => '06:00', '07:00' =>'07:00', '08:00' => '08:00', '09:00' => '09:00', '10:00' => '10:00',
                '11:00' => '11:00', '12:00' => '12:00', '13:00' => '13:00','14:00' => '14:00',
                '15:00' => '15:00', '16:00' => '16:00', '17:00' => '17:00','18:00' => '18:00',
                '19:00' => '19:00', '20:00' => '20:00', '21:00' => '21:00']); */?>

        <?= $form->field($contacto, 'email')->textInput(['maxlength' => true])->input('email',['placeholder' => "CORREO ELECTRONICO"])->label("") ?>

        <?= $form->field($contacto, 'msj')->textInput(['maxlength' => true])->textarea(['rows' => 5,'placeholder' => "MENSAJE"])->label("") ?>

        <div class="form-group">
            <?= Html::submitButton('ENVIAR CONSULTA' , ['class' => 'btn btn-success boton_contacto' ]) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
    <?php if($enviado) { ?>
        <div class="alert alert-success col-md-3 consulta_enviada">
            <strong>Excelente!</strong> Tu consulta fue enviada.
        </div>
    <?php } ?>
</div>