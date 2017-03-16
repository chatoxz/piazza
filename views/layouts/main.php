<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PiazzaAsset;

PiazzaAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="container-fluid logos">
        <img class="img-responsive img_logo_piazza" src="/images/LogoPiazza.png">
        <img class="img-responsive img_logo_fiat" src="/images/LogoFiat.png">
    </div>

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" data-spy="affix" data-offset-top="177">
        <ul class="nav navbar-nav sf-menu">
            <li><a class="active" href="../site/index">INICIO </a></li>
            <li><a href="/nosotros/nosotros">NOSOTROS </a></li>
            <li><a href="/modelos/modelos">MODELOS </a></li>
            <li><a href="/planes/planes">PLANES </a></li>
            <li><a href="/usados/usados">USADOS </a></li>
            <li><a href="/site/postventa">POSTVENTA </a></li>
            <li><a href="/contact/contacto">CONTACTO </a></li>
            <li><a href="/novedades/novedades">NOVEDADES </a></li>
            <li>
                <form class="form_buscar">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar">
                    </div>
                </form>
            </li>
            <?php if (!Yii::$app->user->isGuest){
                echo '<li><a href="/site/logout"> '.ucfirst(Yii::$app->user->identity->username).' (Logout)</a></li>';
            } ?>
        </ul>
    </div>

    <?php /*
    <nav class="" data-spy="affix" data-offset-top="177">
        <ul class="sf-menu">
            <li><a href="../site/index">INICIO </a></li>
            <li><a href="/nosotros/nosotros">NOSOTROS </a></li>
            <li><a href="/modelos/modelos">MODELOS </a></li>
            <li><a href="/site/planes">PLANES </a></li>
            <li><a href="/usados/usados">USADOS </a></li>
            <li><a href="/site/postventa">POSTVENTA </a></li>
            <li><a href="/contact/contacto">CONTACTO </a></li>
            <li><a href="/novedades/novedades">NOVEDADES </a></li>
            <li>
                <form class="form_buscar">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar">
                    </div>
                </form>
            </li>
            <?php if (!Yii::$app->user->isGuest){
                echo '<li><a href="/site/logout"> '.ucfirst(Yii::$app->user->identity->username).' (Logout)</a></li>';
            } ?>
        </ul>
    </nav>
*/ ?>
    <div class="container-fluid big-container-fluid" style="margin-top: 0px; position: relative; z-index: -1;">
        <?= $content ?>
    </div>

<footer class="footer">
    <div class="col-md-12   ">
        <div class="col-md-4 redes">
            <h4> SEGUINOS EN NUESTRAS REDES</h4>
            <a href="https://www.facebook.com/PiazzaTucuman/?fref=ts" target="_blank">
                <img src="/images/icono_face.png" alt="">
            </a>
            <a href="https://www.facebook.com/PiazzaTucuman/?fref=ts" target="_blank">
                <img src="/images/icono_instagram.png" alt="">
            </a>
            <a href="https://www.facebook.com/PiazzaTucuman/?fref=ts" target="_blank">
                <img src="/images/icono_youtube.png" alt="">
            </a>
            <a href="https://www.facebook.com/PiazzaTucuman/?fref=ts" target="_blank">
                <img class="data_fiscal" src="/images/data_fiscal.png" alt="">
            </a>
        </div>
        <div class="col-md-4 sucursales">
            <p><h4> CASA CENTRAL</h4>
                <span>San Martin 1172 | San Miguel de Tucumán | Tucumán </br>
                    Tel 03814306261</span>
            </p>
            <p><h5 class="titulo_sucursales"> Plan de Ahorro </h5>
                <span>Oficina Administracion 4215235 </br>
                    Ventas Plan de ahorro 4216206
                </span>
            </p>
            <p><h4 class="titulo_sucursales"> Sucursal Yerba Buena</h4>
                <span>Av. Aconquija 1117 | Yerba Buena | Tucuman </br>
                    Tel 03814255233 ó 4258625</span>
            </p>
            <p><h4 class="titulo_sucursales"> POST VENTA</h4>
                <span>Don Bosco 2519 / 2525, San Miguel de Tucumán </br>
                    Tel 0381423332 | Tel 03814527751/52</span>
            </p>
        </div>
        <div class="col-md-4 google_maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2908.6839682920095!2d-65.21604128630598!3d-26.827707725316806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8374fc51d90cf2a2!2sPiazza+S.A.!5e0!3m2!1ses-419!2sar!4v1487876890889" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!--<div class="container">
        <p class="pull-left">&copy; My Company <?php //echo date('Y') ?></p>
        <p class="pull-right"><?php //echo Yii::powered() ?></p>
    </div>-->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

