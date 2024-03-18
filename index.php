<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require_once 'controllers/NegozioController.php';
require_once 'controllers/ArticoliController.php';
require_once 'controllers/OrdiniController.php';
require_once 'controllers/SiteController.php';

$app = AppFactory::create();

$app->get("/", "SiteController:index");
$app->get('/negozio', 'NegozioController:getNegozio');
$app->get('/articoli', 'ArticoliController:getArticoli');
$app->get('/articoli/{id}', 'ArticoliController:getArticoloById');
$app->get('/ordini', 'OrdiniController:getOrdini');
$app->get('/ordini/{numero_ordine}', 'OrdiniController:getOrdineByNumero');
$app->get('/ordini/{numero_ordine}/articoli_venduti', 'OrdiniController:getArticoliVendutiByNumero');
$app->get('/ordini/{numero_ordine}/articoli_venduti/{id}', 'OrdiniController:getDettagliArticoloVenduto');
$app->get('/ordini/{numero_ordine}/verifica', 'OrdiniController:verificaImportoTotale');
$app->get('/ordini/{numero_ordine}/sconto', 'OrdiniController:calcolaSconto');

$app->run();