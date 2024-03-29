<?php
class Product {
    private $nimi;
    private $valmistaja;
    private $hinta;
    private $kuvaus;

    public function __construct($nimi, $valmistaja, $hinta, $kuvaus) {
        $this->nimi = $nimi;
        $this->valmistaja = $valmistaja;
        $this->hinta = $hinta;
        $this->kuvaus = $kuvaus;
    }

    public function getNimi() {
        return $this->nimi;
    }
    public function getValmistaja() {
        return $this->valmistaja;
    }
    public function getHinta() {
        return $this->hinta;
    }
    public function getKuvaus() {
        return $this->kuvaus;
    }

    public function get_alvhinta($alv) {
        $alvhinta = $this->hinta * (($alv / 100) + 1);
        return $alvhinta;
    }


}
?>