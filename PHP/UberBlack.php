<?php 
class UberBlack extends Car {
    public $typeCarAccepted = array(array());
    public $seatMaterials = array();

    public function __construct($license, $driver, $typeCarAccepted, $seatMaterials) {
        parent::__construct($license,$driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->$seatMaterials = $seatMaterials;
      }

}
?>