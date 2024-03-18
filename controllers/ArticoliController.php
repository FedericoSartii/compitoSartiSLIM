<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
require_once 'src/Articolo.php';

class ArticoliController {
    private $articoli;

    public function __construct() {
        $this->articoli = [
            new Articolo(1, "Smartphone", "Iphone", 1200),
            new Articolo(2, "Laptop", "Laptop plus", 1000),
            new Articolo(3, "Tablet", "Tablet plus", 900),
        ];
    }

    public function getArticoli(Request $request, Response $response) {
        return $response->withJson($this->articoli);
    }

    public function getArticoloById(Request $request, Response $response, $args) {
        $id = $args['id'];
        $articolo = array_values(array_filter($this->articoli, function($articolo) use ($id) {
            return $articolo->id == $id;
        }));
        if (!empty($articolo)) {
            return $response->withJson($articolo[0]);
        } else {
            return $response->withStatus(404)->withJson(["message" => "Articolo non trovato"]);
        }
    }
}
?>
