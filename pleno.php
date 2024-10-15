<?php
include_once('member.php');
class FullMember extends Member
{
    public function calcularCuota($birth_date): float
    {
        if ($this->calculateAge($birth_date) > 18) {
            return 35000;
        } else {
            return 17000;
        }
    }
}
