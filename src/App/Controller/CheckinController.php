<?php

namespace CheckIn\App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Log\LoggerInterface;
use Zend\Diactoros\Response\HtmlResponse;

final class CheckinController
{
    /**
     * @Inject
     *
     * @var \Twig_Environment
     */
    private $twig;

    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        return new HtmlResponse($this->twig->render('checkin.html.twig'));
    }
}
