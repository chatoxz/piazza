<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 22/03/2017
 * Time: 15:29
 */
?>

<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click para ir arriba." data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<div class="titulo_seccion">
    <div class="container">BUSQUEDA</div>
</div>
<div class="nuestros_modelos container">
    <h3>Nuestros modelos</h3>
    <?php
    foreach ($model as $img){ ?>
        <div class="col-md-3 col-sm-4 wrap_modelos">
            <a href="/modelos/detalles?id=<?php echo $img->id_modelos ?>" title="View" aria-label="View">
                <img src="/images/modelos/<?php
                $bandera = 0;
                foreach ($fotos as $foto){
                    if($foto->id == $img->id_modelos){
                        echo $foto->foto;
                        $bandera = 1;
                        break;
                    }
                }
                ?>" alt="">
                <span class="nombre_modelo"><?php echo $img->nombre ?></span>
            </a>
        </div>
    <?php } ?>
</div>
<div class="container">
    <h3>Nuestros usados</h3>
    <?php
    foreach ($usados as $img){ ?>
        <div class="col-md-3 col-sm-4 wrap_modelos">
            <a href="/usados/usados" title="View" aria-label="View">
                <img src="/images/usados/<?php echo $img->foto; ?>" alt="">
                <span class="nombre_modelo"><?php echo $img->nombre ?></span>
            </a>
        </div>
    <?php } ?>
</div>
