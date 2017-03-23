<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 21/03/2017
 * Time: 11:53
 */
?>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click para ir arriba." data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<div class="titulo_seccion">
    <div class="container">NOVEDADES</div>
</div>
<div class="container wrap_novedades_detalle">
    <div class="col-md-12 wrap_novedad_titulo_foto1">
        <h2 class="titulo_novedad_detalle"><?php echo $model->titulo; ?></h2>
        <img class="img-responsive" src="/images/novedades/<?php echo $model->foto; ?>" alt="">
    </div>
    <div class="col-md-6 wrap_novedad_contenido2">
        <p><?php echo $model->contenido2; ?></p>
    </div>
    <div class="col-md-6 wrap_novedad_foto2">
        <img class="img-responsive" src="/images/novedades/<?php echo $model->foto2; ?>" alt="">
    </div>

</div>