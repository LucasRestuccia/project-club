<?php
include_once('member.php');
include_once('pleno.php');
include_once('semipleno.php');
$nuevoSocio = new Member(123);

$miembroPleno = new FullMember(123);
echo 'Mayor Pleno: ' . $miembroPleno->calcularCuota('2005-06-07');
?>
<br>
<?php
$miembroPleno = new FullMember(123);
echo 'Menor Pleno: ' . $miembroPleno->calcularCuota('2011-06-07');
?>
<br>
<?php

//Otra Forma
/*$Miembros = [new FullMember(123), new SemiMember(456)];
foreach ($Miembros as $members) {
    echo $members->calcularCuota("2022-08-06") . "\n";
}
*/
$miembroSemiPleno = new SemiMember(456);
echo 'Mayor Semi: ' . $miembroSemiPleno->calcularCuota('2005-06-07');
?>
<br>
<?php
$miembroSemiPleno = new SemiMember(456);
echo 'Menor Semi: ' . $miembroSemiPleno->calcularCuota('2015-06-07');
?>
<br>
<?php

?>