<?php
class Entity_NV {
    public $IDNV;
    public $Hoten;
    public $IDPB;
    public $Diachi;

    public function __construct($idnv ,$hoten ,$idpb ,$diachi)
    {
       $this->IDNV = $idnv;
       $this->Hoten = $hoten;
       $this->IDPB = $idpb;
       $this->Diachi = $diachi;
    }
}
?>