<?php

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Piazza';
?>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click para ir arriba." data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<ul id="bxslider1">
    <?php
    foreach ($slide as $img){ ?>
        <div class="col-md-3">
            <a href="<?php echo $img->link ?>" title="View" aria-label="View">
                <img src="/web/images/index/<?php echo $img->foto ?>" alt="">
            </a>
        </div>
    <?php } ?>
</ul>
<h1 class="nuestros_modelos_index_titulo">NUESTROS MODELOS</h1>
<ul id="bxslider2">
    <?php
    foreach ($slide2 as $img){ ?>
        <li class="col-md-2 col-sm-2 col-xs-2" style="padding-left: 0px !important;padding-right: 0px !important;">
            <a href="<?php echo $img->link ?>" title="View" aria-label="View">
                <img src="/web/images/index/<?php echo $img->foto ?>" alt="">
            </a>
        </li>
    <?php } ?>
</ul>
<div class="col-md-12 wrap_contact_home">
    <div class="col-md-6 contact">
        <h2>ENVIANOS TU CONSULTA</h2>

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
    <div class="col-md-6 wrap_img_home">
        <img class="img-responsive img_home" src="/web/images/autos/6.jpg">
    </div>
</div>

<div class="col-md-12 planes_postventa">
    <div class="col-md-6" >
        <div class="wrap_planes">
            <a style="z-index: 1" href="/web/planes/planes">
                <!-- <h1>FINANCIACION DE FABRICA</h1>-->
                <img class="img-responsive img_home_planes" src="/web/images/index/planes.jpg">
                <button class="btn btn-default">VER MÁS</button>
            </a>
        </div>
    </div>
    <div class="col-md-6" >
        <div class="wrap_postventa">
            <a href="/web/site/postventa">
                <!--<h1>POST VENTA</h1>-->
                <img class="img-responsive img_home_postventa" src="/web/images/index/postventa.jpg">
                <button class="btn btn-success">
                    <span> SACÁ TURNO</span>
                    <span> ONLINE</span>
                </button>
            </a>
        </div>
    </div>
</div>

<a href="/web/novedades/novedades">
    <div class="col-md-12 novedades">
        <img class="img-responsive" src="/web/images/index/novedades.jpg">
        <!--<h3>NOVEDADES</h3>-->
    </div>
</a>

<div class="col-md-12" style="display: inline-block; display: none">
    <div class="boton_newsleter">SUSCRIBITE A NUESTRO NEWSLETTER</div>
</div>

<div class="col-md-12 linia_divisora_footer"></div></div>

<div class="col-md-12">
    <div class="col-md-6">
        <p>
            <span> Piazza S.A</span> inicio su actividad como Concesionaria Oficial FIAT en febrero hace 10 años en la ciudad de San Miguel de Tucuman.
        </p>
        <p>
            Hoy en dia somos una familia constituida por 95 personas y con miras de expansion. </br>
            En un continuo proceso de crecimiento y, junto a su sucursal exclusiva para Plan de Ahorro adquirida el año pasado,
            ya son tres los lugares con los que contamos, Casa Central y Servicio de Postventa
        </p>
    </div>
    <div class="col-md-6">
        <p>
            En <span> Piazza S.A</span> sus miembros tienen como valor el trabajo y siempre pueden encontrar posibilidades de desarrollo profesional.
            Nuestros clientes son considerados amigos de la casa y nos importa de sobremanera brindarles un servicio de gran valor
            satisfaciendo sus necesidades, y de esta manera sosteniendo que somos una empresa de seriedad y confianza
        </p>
    </div>
</div>
