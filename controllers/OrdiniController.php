<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
require_once 'src/Ordine.php';

class OrdiniController {
    private $ordini;

    public function __construct() {
        $this->ordini = [
            new Ordine(1, "2024-03-18", 1500, [
                ["id" => 1, "prezzo_di_vendita" => 500, "quantita_acquistata" => 2],
                ["id" => 2, "prezzo_di_vendita" => 1000, "quantita_acquistata" => 1]
            ]),
            new Ordine(2, "2024-03-19", 300, [
                ["id" => 3, "prezzo_di_vendita" => 300, "quantita_acquistata" => 1]
            ]),
        ];
    }

    public function getOrdini(Request $request, Response $response) {
        return $response->withJson($this->ordini);
    }

    public function getOrdineByNumero(Request $request, Response $response, $args) {
        $numero_ordine = $args['numero_ordine'];
        $ordine = array_values(array_filter($this->ordini, function($ordine) use ($numero_ordine) {
            return $ordine->numero_ordine == $numero_ordine;
        }));
        if (!empty($ordine)) {
            return $response->withJson($ordine[0]);
        } else {
            return $response->withStatus(404)->withJson(["message" => "Ordine non trovato"]);
        }
    }

    public function getArticoliVendutiByNumero(Request $request, Response $response, $args) {
        $numero_ordine = $args['numero_ordine'];
        $ordine = array_values(array_filter($this->ordini, function($ordine) use ($numero_ordine) {
            return $ordine->numero_ordine == $numero_ordine;
        }));
        if (!empty($ordine)) {
            return $response->withJson($ordine[0]->articoli_venduti);
        } else {
            return $response->withStatus(404)->withJson(["message" => "Ordine non trovato"]);
        }
    }

    public function getDettagliArticoloVenduto(Request $request, Response $response, $args) {
        $numero_ordine = $args['numero_ordine'];
        $id_articolo = $args['id'];
        $ordine = array_values(array_filter($this->ordini, function($ordine) use ($numero_ordine) {
            return $ordine->numero_ordine == $numero_ordine;
        }));
        if (!empty($ordine)) {
            $articolo = array_values(array_filter($ordine[0]->articoli_venduti, function($item) use ($id_articolo) {
                return $item['id'] == $id_articolo;
            }));
            if (!empty($articolo)) {
                return $response->withJson($articolo[0]);
            } else {
                return $response->withStatus(404)->withJson(["message" => "Articolo non trovato nell'ordine specificato"]);
            }
        } else {
            return $response->withStatus(404)->withJson(["message" => "Ordine non trovato"]);
        }
    }

    public function verificaImportoTotale(Request $request, Response $response, $args) {
        
    }

    public function calcolaSconto(Request $request, Response $response, $args) {
        
}
}
?>
