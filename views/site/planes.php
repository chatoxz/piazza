<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 21/02/2017
 * Time: 18:42
 */
?>
<div class="container planes">
    <h1>PLANES DE AHORRO</h1>
    <div class="col-md-8">
        <p>
            En <strong>Piazza</strong> te brindamos las mejores condiciones para que puedas acceder a tu 0km: </br>
            FIAT PLAN, el plan que te permite accedes a tu FIAT 0km de manera ágil, fácil y segura.
        </p>
        <p>
            Ventajas:
        <ul>
            <li>Financiacion del 100% del valor.</li>
            <li>Entregas Pactadas.</li>
            <li>Totalmente en pesos.</li>
            <li>Sin inetereses.</li>
            <li>Te suscribis sólo con tu DNI.</li>
            <li>La gama d modelos mas amplia del mercado.</li>
            <li>La mas amplia red de cobro para el pago de tus cuotas.</li>
        </ul>
        ALCANZÁ TU FIAT 0KM, PONÉ EN MARCHA TU PLAN
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
