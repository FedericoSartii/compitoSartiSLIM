<?php
class Negozio {
    private $nome;
    private $telefono;
    private $indirizzo;
    private $sito_internet;
    private $p_iva;

    public function __construct($nome, $telefono, $indirizzo, $sito_internet, $p_iva) {
        $this->nome = $nome;
        $this->telefono = $telefono;
        $this->indirizzo = $indirizzo;
        $this->sito_internet = $sito_internet;
        $this->p_iva = $p_iva;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getIndirizzo() {
        return $this->indirizzo;
    }

    public function setIndirizzo($indirizzo) {
        $this->indirizzo = $indirizzo;
    }

    public function getSitoInternet() {
        return $this->sito_internet;
    }

    public function setSitoInternet($sito_internet) {
        $this->sito_internet = $sito_internet;
    }

    public function getPIva() {
        return $this->p_iva;
    }

    public function setPIva($p_iva) {
        $this->p_iva = $p_iva;
    }
}
?>

