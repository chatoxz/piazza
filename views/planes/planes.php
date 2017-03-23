<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 21/02/2017
 * Time: 18:42
 */

$this->title = 'Piazza';

?>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click para ir arriba." data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<div class="titulo_seccion">
    <div class="container">MODELOS FINANCIADOS DE FABRICA</div>
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
    <div class="col-md-4   img_fiat_plan">
        <img src="/images/fiat_Plan.jpg" alt="">
    </div>
    <div class="plan_ahorro_modelos">
        <?php foreach ($planes as $plan){ ?>
            <div class="col-md-6 wrap_img_modelo">
                <a href="/planes/detalles?id=<?php echo $plan->id_plan?>&id_modelos=<?php echo $plan->id_modelos ?>" title="View" aria-label="View">
                    <img src="/images/planes/<?php
                            echo $plan->foto;
                    ?>" alt="">
                    <span class="nombre_modelo"><?php echo $plan->nombre ?></span>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
