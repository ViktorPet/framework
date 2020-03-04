<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;


  class IndexController {
    /**
  * @var \App\Controller\TemplateRenderer
  */
 protected $templateRenderer;

 /**
  * Construct.
  *
  * @param \App\Controller\TemplateRenderer $templateRenderer
  */
 public function __construct(TemplateRenderer $templateRenderer)
 {
     $this->templateRenderer = $templateRenderer;
 }

 /**
  * Controller.
  *
  * @param \Psr\Http\Message\ServerRequestInterface $request
  *
  * @return \Psr\Http\Message\ResponseInterface
  */
 public function __invoke(ServerRequestInterface $request) : ResponseInterface
 {
     $body     = $this->templateRenderer->render('<h1> Hello World </h1>');
     $response = new Response;

     $response->getBody()->write($body);
     return $response->withStatus(200);
 }
  }
