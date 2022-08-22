<?php

namespace Pyz\Zed\ApplicationAT\Communication\Controller;

use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;

use Symfony\Component\HttpFoundation\Response;

class IndexController extends SprykerIndexController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Response $response
     *
     *
     */
    public function indexAction()
    {
        return new Response('Hello AT Store!');
    }
}
