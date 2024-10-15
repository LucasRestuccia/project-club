<?php
include_once('member.php');
include_once('pleno.php');
$nuevoSocio = new Member(123);

echo $nuevoSocio->calculateAge('1972-06-08');

echo $nuevoSocio->calcularCuota('1972-06-08');

$miembroPleno = new FullMember(123);
echo $miembroPleno->calcularCuota('2005-06-07');
