<?php

class Kayttaja {
    private $kayttajaID;
    private $etunimi;
    private $sukunimi;

    
    public function __construct($kayttajaID = NULL, $etunimi ="", $sukunimi ="") {
        $this->kayttajaID = $kayttajaID;
        $this->etunimi = $etunimi;
        $this->sukunimi = $sukunimi;
    }
    

    public function get_kayttajaID() {
        return $this->kayttajaID;
    }
    public function get_etunimi() {
        return $this->etunimi;
    }
    public function get_sukunimi() {
        return $this->sukunimi;
    }


    public function set_kayttajaID($kayttajaID) {
        $this->kayttajaID = $kayttajaID;
    }
    public function set_etunimi($etunimi) {
        $this->etunimi = $etunimi;
    }
    public function set_sukunimi($sukunimi) {
        $this->sukunimi = $sukunimi;
    }
}

