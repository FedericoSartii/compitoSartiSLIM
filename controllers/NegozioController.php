/<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
require_once 'src/Negozio.php';

class NegozioController {
    public function getNegozio(Request $request, Response $response) {
        $negozio = new Negozio("MediaWorld", "3668889090", "Via Nenni 56", "https://www.mediaworld.it/", "12345678901");
        return $response->withJson($negozio);
    }
}
?>
