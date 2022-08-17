<?php

namespace Pyz\Zed\Planet\Communication\Controller;

use Generated\Shared\Transfer\PlanetCollectionTransfer;
use Generated\Shared\Transfer\PlanetTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;
use Spryker\Glue\Kernel\Controller\AbstractController;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;


class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */

    public function getPlanetCollectionAction(?PlanetCollectionTransfer $planetCollectionTransfer): PlanetCollectionTransfer
    {
        $s = new PlanetCollectionTransfer();

        $s->addPlanet((new PlanetTransfer())->fromArray([
            'name' => 'jupiter',
            'idPlanet' => 6,
            'interestingFact' => '',
            'orbitTime' => ''
        ],true));
        return $s;


    }
}
