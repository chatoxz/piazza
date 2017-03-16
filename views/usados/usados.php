<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 06/03/2017
 * Time: 12:21
 */
$this->title = 'Piazza';

?>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click para ir arriba." data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<div class="titulo_seccion">
    <div class="container">USADOS</div>
</div>

<div class=" nuestros_usados">
    <?php
    foreach ($model as $img){ ?>
        <div class="col-md-4">
            <a href="/modelos/detalles?id=<?php echo $img->id_usados ?>" title="View" aria-label="View">
                <img src="/images/modelos/<?php echo $img->foto ?>" alt="">
                <span class="descripcion_usado"><?php
                    $img->descripcion = str_replace("\n", "<br />", $img->descripcion);
                    echo $img->descripcion ?>
                </span>
            </a>
        </div>
    <?php } ?>

    <div class="col-md-12   ">
        Ofrecemos vehículos usados de la marca Fiat así como de otros fabricantes de automóviles. Brindamos la mejor
        financiación y el respaldo de nuestro Concesionario, todos  nuestros usados son peritados por mecánicos
        capacitados  antes de ser recibidos y son acondicionados para que el cliente que lo adquiera disfrute su andar
        sin inconvenientes.
    </div>

</div>