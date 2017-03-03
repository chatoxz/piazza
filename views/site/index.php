<?php

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Piazza';
?>

<ul id="bxslider1">
    <li><img src="/images/autos/3.jpg" /></li>
    <li><img src="/images/autos/3.jpg" /></li>
    <li><img src="/images/autos/3.jpg" /></li>
    <li><img src="/images/autos/3.jpg" /></li>
</ul>

<h4>NUESTROS MODELOS</h4>
<ul id="bxslider2">
    <li><img src="/images/autos/7.jpg" /></li>
    <li><img src="/images/autos/7.jpg" /></li>
    <li><img src="/images/autos/7.jpg" /></li>
    <li><img src="/images/autos/7.jpg" /></li>
    <li><img src="/images/autos/7.jpg" /></li>
    <li><img src="/images/autos/7.jpg" /></li>
</ul>

<div class="site-contact">
    <div class="col-md-12">
        <div class="col-md-6 contact">
            <h1>Envianos tu consulta</h1>

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
        <div class="col-md-6">
            <img class="img-responsive img_home" src="/images/autos/6.jpg">
        </div>
    </div>
</div>

<div class="col-md-12 planes_postventa">
    <div class="col-md-6" >
        <div class="wrap_planes">
            <a href="/site/planes">
                <h3>FIAT PLAN</h3>
                <button class="btn btn-default">VER MAS</button>
                <img class="img-responsive img_home" src="/images/autos/6_1.jpg">
            </a>
        </div>
    </div>
    <div class="col-md-6" >
        <div class="wrap_postventa">
            <a href="/site/postventa">
                <h3>POST VENTA</h3>
                <button class="btn btn-success">SACA TURNO ONLINE</button>
                <img class="img-responsive img_home" src="/images/autos/6_1.jpg">
            </a>
        </div>
    </div>
</div>

<div class="col-md-12 novedades">
    <h3>NOVEDADES</h3>
</div>
<div class="col-md-12" style="display: inline-block">
    <div class="boton_newsleter">SUSCRIBITE A NUESTRO NEWSLETTER</div>
</div>

<div class="col-md-12 linia_divisora_footer"></div>

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