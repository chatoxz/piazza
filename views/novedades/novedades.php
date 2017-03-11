<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 06/03/2017
 * Time: 15:18
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Piazza';
?>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click para ir arriba." data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<div class="titulo_seccion">
    <div class="container">NOVEDADES</div>
</div>

<?php
$i = 1;
foreach ($model as $nov){ ?>
    <div class="col-md-12 wrap_novedades">
        <div class="col-md-6 texto_novedad">
            <div class="titulo_novedad"><?php echo $nov->titulo ?></div>
            <p>
                <?php
                $nov->contenido = str_replace("\n", "<br />", $nov->contenido);
                echo $nov->contenido;
                ?>
            </p>
            <?php echo $nov->subtitulo ?> </br>
            <?php echo $nov->autor ?> </br>
            <?php echo $nov->fecha ?> </br>

        </div>
        <div class="col-md-6">
            <img class="img-responsive img_home" src="/images/novedades/<?php echo $nov->foto ?>">
        </div>
        <?php
        $i++;
        if ($i > 2 ) break; ?>
    </div>
<?php } ?>





