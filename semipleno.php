<?php
include_once('member.php');
class SemiMember extends Member
{
    public function calcularCuota($birth_date): float
    {
        if ($this->calculateAge($birth_date) > 18) {
            return 15000;
        } else {
            return 9000;
        }
    }
}
