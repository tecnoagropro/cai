<?php
require_once '../modelo/clases.php';

$c= new Conexion();
$u= new Usuario();
$i= new Invitado();

$u->autenticar_ingreso();
$i->hora_salida($c->getConex(), $_POST['id_invitado'], $_POST['hora_salida']);

mysql_close($c->getConex());
?>