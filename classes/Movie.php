<?php
class Movie {
    private $titolo;
    private $trama;
    private $durata;
    public $attori;
    private $regista;
    private $anno;

    public function __construct($_titolo, $_trama = NULL, $_durata = 0, $_attori, $_anno)
    {
        $this->titolo = $_titolo;
        $this->trama = $_trama;
        $this->durata = $_durata;
        $this->attori = $_attori;
        $this->setAnno($_anno);
    }

    public function getTitolo()
    {
        return $this->titolo;
    }
    public function getTrama()
    {
        return $this->trama;
    }
    public function setAnno($_anno)
    {
        if( $_anno >= 1950 ) {
            $this->anno = $_anno;
        }
    }
}