<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 01/03/2017
 * Time: 16:17
 */
$this->title = 'Piazza';

?>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<div class="titulo_seccion">
    <div class="container">NUESTRA EMPRESA</div>
</div>

<div class="container nuestra_empresa">
    <?php // var_dump($model); ?>

    <div class="col-md-6">
        <!-- The main images -->
        <ul id="bxslider">
            <?php
            foreach ($model as $img){
                echo '<li><img src="/images/autos/'.$img->foto.'" alt=""></li>';
            } ?>
        </ul>
        <!-- The thumbnails -->
        <ul id="bxslider-pager">
            <?php
            $i = 0;
            foreach ($model as $img){
                echo '<li data-slide-index="'.$i.'"><a href=""><img src="/images/autos/'.$img->foto.'" /></a></li>';
                $i++;
            } ?>
        </ul>
    </div>

    <div class="col-md-6">
        <p>
            Piazza S.A inicia su actividad como Concesionaria Ofivial FIAT en marzo de 1997, en la ciudad  de San Miguel de Tucuman. Somos
        una compañia con años de experiencia en la comercializacion de vehiculos y servicios de la Marca Fiat. Brindamos covertura de
        venta en diferentres canales: Convencional, Planes de ahorro, Venta directa y Division Usados.
        </p>
        <p>
            Nuestra trayectoria revela 20 años en el mercado Tucumano acompañando a la marca Fiat con una gran cantidad de vehiculos entregados
            y un equipo de trabajo que supera los 150 colaboradoes, especialmente capacitados para ofrecer el mejor servicio al cliente.
        </p>
        <p>Contamos ademas con Despósito Propio, un local exclusivo de entrega de unidades, una sucursal de lujo en Yerba Buena y mejor servicio
        de Postventa para lograr la mejor experiencia de compra.
        </p>
        <p>
            En Piazza SA sus miembros tienen como valor el trabajo y pueden econtrar desarrollo y progreso profesional; nuestros clientes son
            considerados amigos de la casa y nos importa de sobremanera brindar un servicio que tenga valor para ellos satisfaciendo sus necesidades,
            sosteniendo que somos una empresa de seriedad y confianza.
        </p>

    </div>
</div>

