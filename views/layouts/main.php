<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\models\Fotos;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\ActiveForm;
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
    <img class="img-responsive img_logo_piazza" src="/web/images/LogoPiazza.png">
    <img class="img-responsive img_logo_fiat" src="/web/images/LogoFiat.png">
</div>
<div class="clearfix" style="margin: 15px 30px;color: white">
    <?php if (!Yii::$app->user->isGuest){
        echo Html::a('ADMINISTRACION', ['novedades/index'], ['class' => 'btn btn-info']);
    } ?>
</div>
<div class="navbar-header">
    <a class="navbar-brand" href="#">Menu</a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="collapse navbar-collapse" id="myNavbar" data-spy="affix" data-offset-top="177">
    <ul class="nav navbar-nav sf-menu">
        <li> <?= Html::a('INICIO', ['site/index']); ?></li>
        <li> <?= Html::a('NOSOTROS', ['nosotros/nosotros']); ?></li>
        <li> <?= Html::a('MODELOS', ['modelos/modelos']); ?></li>
        <li> <?= Html::a('PLANES', ['planes/planes']); ?></li>
        <li> <?= Html::a('USADOS', ['usados/usados']); ?></li>
        <li> <?= Html::a('POSTVENTA', ['site/postventa']); ?></li>
        <li> <?= Html::a('NOVEDADES', ['novedades/novedades', 'indice' => '1']); ?></li>
        <li> <?= Html::a('CONTACTO', ['contact/contacto']); ?></li>
        <li>
            <?php $modelos = new \app\models\Modelos();
            $form = ActiveForm::begin(['action' =>['site/buscar'], 'method' => 'post',]); ?>
            <?php echo $form->field($modelos, 'nombre')->textInput()->label(''); ?>
            <?php ActiveForm::end(); ?>
        </li>
    </ul>
</div>

<div class="container-fluid big-container-fluid">
    <?= $content ?>
</div>

<?php if (Yii::$app->user->isGuest){ ?>

    <footer class="footer">
        <div class="col-md-12   ">
            <div class="col-md-4 redes">
                <h4> SEGUINOS EN NUESTRAS REDES</h4>
                <a href="https://www.facebook.com/PiazzaTucuman/?fref=ts" target="_blank">
                    <img src="/web/images/icono_face.png" alt="">
                </a>
                <a href="https://www.instagram.com/piazzaconcesionario/" target="_blank">
                    <img src="/web/images/icono_instagram.png" alt="">
                </a>
                <a href="https://www.youtube.com/channel/UC9rZN3dVH3fvpVszNdgklYg" target="_blank">
                    <img src="/web/images/icono_youtube.png" alt="">
                </a>
                <a href="https://www.facebook.com/PiazzaTucuman/?fref=ts" target="_blank">
                    <img class="data_fiscal" src="/web/images/data_fiscal.png" alt="">
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2908.6839682920095!2d-65.21604128630598!3d-26.827707725316806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8374fc51d90cf2a2!2sPiazza+S.A.!5e0!3m2!1ses-419!2sar!4v1487876890889" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!--<div class="container">
        <p class="pull-left">&copy; My Company <?php //echo date('Y') ?></p>
        <p class="pull-right"><?php //echo Yii::powered() ?></p>
    </div>-->
    </footer>
<?php } ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

