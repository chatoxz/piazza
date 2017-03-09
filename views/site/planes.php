<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 21/02/2017
 * Time: 18:42
 */

$this->title = 'Piazza';

?>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<div class="titulo_seccion">
    <div class="container">PLANES DE AHORRO</div>
</div>
<div class="container planes">
    <div class="col-md-8">
        <p>
            En <strong>Piazza</strong> te brindamos las mejores condiciones para que puedas acceder a tu Okm: </br>
            FIAT PLAN, el plan que te permite acceder a tu FIAT 0km de manera ágil, fácil y segura.
        </p>
        <p>
            Ventajas:
        <ul>
            <li>Financiacion del 100% del valor.</li>
            <li>Entregas Pactadas.</li>
            <li>Totalmente en pesos.</li>
            <li>Sin inetereses.</li>
            <li>Te suscribís sólo con tu DNI.</li>
            <li>La gama de modelos mas amplia del mercado.</li>
            <li>La mas amplia red de cobro para el pago de tus cuotas.</li>
        </ul>
        ALCANZÁ TU FIAT OKM, PONÉ EN MARCHA TU PLAN
        </p>

    </div>
    <div class="col-md-4 img_fiat_plan">
        <img src="/images/fiat_Plan.jpg" alt="">
    </div>
    <div class="plan_ahorro_modelos">
        <?php foreach ($model as $img){ ?>
            <div class="col-md-6 wrap_img_modelo">
                <a href="/modelos/detalles?id=<?php echo $img->id_modelos ?>" title="View" aria-label="View">
                    <img src="/images/modelos/<?php echo $img->foto ?>" alt="">
                    <span class="nombre_modelo"><?php echo $img->nombre ?></span>
                </a>
            </div>
        <?php } ?><?php foreach ($model as $img){ ?>
            <div class="col-md-6 wrap_img_modelo">
                <a href="/modelos/detalles?id=<?php echo $img->id_modelos ?>" title="View" aria-label="View">
                    <img src="/images/modelos/<?php echo $img->foto ?>" alt="">
                    <span class="nombre_modelo"><?php echo $img->nombre ?></span>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
