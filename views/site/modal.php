<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 29/05/2017
 * Time: 11:35
 */

use yii\bootstrap\Modal;

$modal =  Modal::begin([
    'header' => '<h1>Piazza</h1>',
    'id' => 'modal',
    'size' => 'modal-md',
    'footer' => '<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>'
]);
echo '<div id="modalContent">Mensaje enviado.</div>';

Modal::end();

?>