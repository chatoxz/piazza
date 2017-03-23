<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 20/03/2017
 * Time: 11:52
 */
use yii\helpers\Html;

?>
<div class="menu_admin clearfix">
<?= Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-info']) ?>
<?= Html::a('Modelos',  ['modelos/index'], ['class' => 'btn btn-info']) ?>
<?= Html::a('Contactos',['contact/index'], ['class' => 'btn btn-info']) ?>
<?= Html::a('Fotos Nosotros', ['nosotros/index'], ['class' => 'btn btn-info']) ?>
<?= Html::a('Usados',   ['usados/index'], ['class' => 'btn btn-info']) ?>
<?= Html::a('Index fotos', ['fotos/indexfotos?id_tipo=3'], ['class' => 'btn btn-info']) ?>
<?= Html::a('Planes', ['planes/index'], ['class' => 'btn btn-info']) ?>
<?= Html::a('Novedades', ['novedades/index'], ['class' => 'btn btn-info']) ?>
<?= Html::a( ucfirst(Yii::$app->user->identity->username).' (Logout)', ['/site/logout'], ['class' => 'btn btn-info']) ?>
</div>