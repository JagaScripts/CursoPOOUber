<?php
require_once('Car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatMaterials;

    public function __construct($license, $driver, $typeCarAccepted, $seatMaterials) {
        parent::__construct($license,$driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatMaterials = $seatMaterials;
      }

}
?>