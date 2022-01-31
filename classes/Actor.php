<?php 
class Actor {
    private $nome;
    private $cognome;
    private $data_nascita;

    public function __construct($_options)
    {
        $this->nome = $_options["nome"];
        $this->cognome = $_options["cognome"];
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getCognome()
    {
        return $this->cognome;
    }
}