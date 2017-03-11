<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 02/03/2017
 * Time: 15:19
 */
$this->title = 'Piazza';
?>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click para ir arriba." data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<div class="titulo_seccion">
    <div class="container">MODELOS FINANCIADOS POR FABRICA</div>
</div>
<div class=" nuestros_modelos">
    <?php
    foreach ($model as $img){ ?>
        <div class="col-md-3">
            <a href="/modelos/detalles?id=<?php echo $img->id_modelos ?>" title="View" aria-label="View">
                <img src="/images/modelos/<?php echo $img->foto ?>" alt="">
                <span class="nombre_modelo"><?php echo $img->nombre ?></span>
            </a>
        </div>
    <?php } ?>

    <div class="col-md-12">
        Para nuestros vendedores nuestros clientes son considerados amigos de la casa y nos importa de sobremanera brindar un servicio
        que tenga valor para ellos satisfaciendo sus necesidades, sosteniendo que somos una empresa de seriedad y confianza. </br>
        Nuestro personal de ventas se esfuerza por ofrecer la mejor expreriencia de compra posible de autos 0km, brindando la mejor financiacion y atencion a nuestros
        clientes. El éxito en nuestro crecimiento, lo fundamentamos por prestar servicios integrales bajo los principios de Excelencia de Calidad Fiat, que prioriza
        relaciones de confianza duradera.
    </div>

</div>

