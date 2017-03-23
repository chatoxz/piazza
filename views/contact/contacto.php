<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 06/03/2017
 * Time: 12:52
 **/

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Piazza';

?>

<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click para ir arriba." data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
<div class="titulo_seccion">
    <div class="container">CONTACTO</div>
</div>
<div class="wrap_pagina_contacto">
    <div class="form_contacto_contact_page">
        <div class="col-md-12   ">
            <div class="col-md-6 contact">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'nombre')->textInput(['maxlength' => true])->input('nombre',['placeholder' => "NOMBRE Y APELLIDO"])->label("") ?>

                <?= $form->field($model, 'tel')->textInput(['maxlength' => true])->input('tel',['placeholder' => "TELEFONO"])->label("") ?>

                <?= $form->field($model, 'domicilio')->textInput(['maxlength' => true])->input('domicilio',['placeholder' => "DOMICILIO"])->label("") ?>

                <?php echo $form->field($model, 'desde')->label('')
                    ->dropDownList([ '06:00' => '06:00', '07:00' =>'07:00', '08:00' => '08:00', '09:00' => '09:00', '10:00' => '10:00',
                        '11:00' => '11:00', '12:00' => '12:00', '13:00' => '13:00','14:00' => '14:00',
                        '15:00' => '15:00', '16:00' => '16:00', '17:00' => '17:00','18:00' => '18:00',
                        '19:00' => '19:00', '20:00' => '20:00', '21:00' => '21:00']);
                // '00:00' => '00:00', '01:00' => '01:00', '02:00' => '02:00' ,'03:00' => '03:00', '04:00' => '04:00','05:00'=> '05:00', ,'22:00' => '22:00',                    '23:00' => '23:00', '24:00' => '24:00'?>
                <span> hasta </span>
                <?= $form->field($model, 'hasta')->label('')
                    ->dropDownList([ '06:00' => '06:00', '07:00' =>'07:00', '08:00' => '08:00', '09:00' => '09:00', '10:00' => '10:00',
                        '11:00' => '11:00', '12:00' => '12:00', '13:00' => '13:00','14:00' => '14:00',
                        '15:00' => '15:00', '16:00' => '16:00', '17:00' => '17:00','18:00' => '18:00',
                        '19:00' => '19:00', '20:00' => '20:00', '21:00' => '21:00']); ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true])->input('email',['placeholder' => "CORREO ELECTRONICO"])->label("") ?>

                <?= $form->field($model, 'msj')->textInput(['maxlength' => true])->textarea(['rows' => 5,'placeholder' => "MENSAJE"])->label("") ?>

                <div class="form-group">
                    <?= Html::submitButton('ENVIAR CONSULTA' , ['class' => 'btn btn-success boton_contacto' ]) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-md-6 imagen_contacto">
                <img class="img-responsive img_home" src="/images/contacto_img1.jpg">
            </div>
        </div>
    </div>

    <div class="col-md-12   ">
        <img class="img-responsive img_contacto_detalle" src="/images/contacto_img2.jpg">
    </div>

    <div class="col-md-12  sucursales_contacto">
        <div class="col-md-4 col-sm-4 sucursales">
            <p>
            <h4> CASA CENTRAL</h4>
            <span>San Martin 1172 </br>
                San Miguel de Tucumán | Tucumán </br>
                <span class="telefono">Tel 0381 430 6261 </span></br></br>
                Lun. a Vie. 9 a 13hs - 17 a 21hs </br>
                Sabado 9 a 13hs
            </span>
            </p>
            <div class=" wrap_como_llegar">
                <a href="https://www.google.com.ar/maps/place/Piazza+S.A./@-26.8277697,-65.2146008,17z/data=!4m5!3m4!1s0x94225c6b4b1b7673:0x8374fc51d90cf2a2!8m2!3d-26.8278446!4d-65.2146951"
                   class="btn btn-success boton_como_llegar " target="_blank">
                    COMO LLEGAR
                </a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 sucursales">
            <p>
            <h4 class="titulo_sucursales"> Sucursal Yerba Buena</h4>
                <span>Av. Aconquija 1117 </br>
                    Yerba Buena | Tucuman </br>
                    <span class="telefono">Tel 0381 425 5233 ó 425 8625 </span></br></br>
                    Lun. a Vie. 9 a 13hs - 17 a 21hs </br>
                    Sabado 9 a 13hs
                </span>
            </p>
            <div class="wrap_como_llegar">
                <a href="https://www.google.com.ar/maps/place/Fiat+Piazza/@-26.8133141,-65.2919613,17z/data=!4m8!1m2!2m1!1sPiazza+yerba+Buena!3m4!1s0x94225cd5584ebfcf:0x2bacc48b043422b!8m2!3d-26.814493!4d-65.2850083"
                   class="btn btn-success boton_como_llegar " target="_blank">
                    COMO LLEGAR
                </a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 sucursales">
            <p>
            <h4 class="titulo_sucursales"> POST VENTA</h4>
            <span>Don Bosco 2519 / 2525 </br>
                San Miguel de Tucumán </br>
                <span class="telefono">Tel 0381423 3332 | Tel 03814527751/52</span></br></br>
                Lun. a Vie. 9 a 13hs - 17 a 21hs </br>
                Sabado 9 a 13hs
            </span>
            </p>
            <div class=" wrap_como_llegar">
                <a href="https://www.google.com.ar/maps/place/Don+Bosco+2519,+4000+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8209217,-65.2364712,17z/data=!4m5!3m4!1s0x94225c591a6710e5:0x20e388859c79cdad!8m2!3d-26.8197799!4d-65.234591"
                   class="btn btn-success boton_como_llegar " target="_blank">
                    COMO LLEGAR
                </a>
            </div>
        </div>
    </div>
</div>
