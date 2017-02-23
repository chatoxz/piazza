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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container-fluid logos">
        <img class="img-responsive img_logo_piazza" src="/images/LogoPiazza.png">
        <img class="img-responsive img_logo_fiat" src="/images/LogoFiat.png">
    </div>

    <nav class="" data-spy="affix" data-offset-top="177">
        <ul class="sf-menu">
            <li><a href="index.php">INICIO </a></li>
            <li><a href="#">NOSOTROS </a></li>
            <li><a href="#">MODELOS </a></li>
            <li><a href="#">PLANES </a></li>
            <li><a href="#">POSTVENTA </a></li>
            <li><a href="#">CONTACTO </a></li>
            <li><a href="#">NOTICIAS </a></li>
            <li><a href="#">BUSCAR </a></li>
        </ul>
    </nav>

    <div class="container-fluid " style="margin-top: 37px; position: relative; z-index: -1;">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <!--<div class="container">
        <p class="pull-left">&copy; My Company <?php //echo date('Y') ?></p>
        <p class="pull-right"><?php //echo Yii::powered() ?></p>
    </div>-->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

