<?php
class Ordine {
    private $numero_ordine;
    private $data;
    private $importo_totale;
    private $articoli_venduti;

    public function __construct($numero_ordine, $data, $importo_totale, $articoli_venduti) {
        $this->numero_ordine = $numero_ordine;
        $this->data = $data;
        $this->importo_totale = $importo_totale;
        $this->articoli_venduti = $articoli_venduti;
    }

    public function getNumeroOrdine() {
        return $this->numero_ordine;
    }

    public function setNumeroOrdine($numero_ordine) {
        $this->numero_ordine = $numero_ordine;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getImportoTotale() {
        return $this->importo_totale;
    }

    public function setImportoTotale($importo_totale) {
        $this->importo_totale = $importo_totale;
    }

    public function getArticoliVenduti() {
        return $this->articoli_venduti;
    }

    public function setArticoliVenduti($articoli_venduti) {
        $this->articoli_venduti = $articoli_venduti;
    }
}
?>
