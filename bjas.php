<?php
class Klanten {
    private $klantnaam;
    private $klantEmail;
    
    public function __construct($klantnaam, $klantEmail) {
        $this->klantnaam = $klantnaam;
        $this->klantEmail = $klantEmail;
    }
    
    
    
    public function getklantnaam() {
        return $this->klantnaam;
    }
    
    public function setklantnaam($klantnaam) {
        $this->klantnaam = $klantnaam;
    }
    
    public function getklantEmail() {
        return $this->klantEmail;
    }
    
    public function setklantEmail($klantEmail) {
        $this->klantEmail = $klantEmail;
    }
    
   
    public function save() {
    
        return true;
    }
}
?>

