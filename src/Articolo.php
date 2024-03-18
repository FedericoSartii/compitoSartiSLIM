<?php
class Articolo {
    private $id;
    private $nome;
    private $descrizione;
    private $prezzo_di_listino;

    public function __construct($id, $nome, $descrizione, $prezzo_di_listino) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo_di_listino = $prezzo_di_listino;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescrizione() {
        return $this->descrizione;
    }

    public function setDescrizione($descrizione) {
        $this->descrizione = $descrizione;
    }

    public function getPrezzoDiListino() {
        return $this->prezzo_di_listino;
    }

    public function setPrezzoDiListino($prezzo_di_listino) {
        $this->prezzo_di_listino = $prezzo_di_listino;
    }
}
?>
