<?php
class Member
{
    private $idMember;
    public function __construct($id)
    {
        $id = //numero de socio
            $this->idMember = $id;
    }
    public function setIdMember($newIdMember)
    {
        $this->idMember = $newIdMember;
    }
    protected function calculateAge($birthdate): int
    {
        $current_date = date('Y-m-d');
        $birth_date_obj = new DateTime($birthdate);
        $current_date_obj = new DateTime($current_date);
        $diff = $current_date_obj->diff($birth_date_obj);
        $age_years = $diff->y;
        return $age_years;
    }


    public function calcularCuota($birthdate): float
    {
        return 0.0;
    }
}
