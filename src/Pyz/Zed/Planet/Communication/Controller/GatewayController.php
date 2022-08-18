<?php

namespace Pyz\Zed\Planet\Communication\Controller;

use Generated\Shared\Transfer\PlanetCollectionTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\Planet\Business\PlanetFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\PlanetCollectionTransfer $planetsRestApiTransfer
     *
     * @return \Generated\Shared\Transfer\PlanetCollectionTransfer $planetsRestApiTransfer
     */
    public function getPlanetCollectionAction(PlanetCollectionTransfer $planetsRestApiTransfer): PlanetCollectionTransfer
    {
        return $this->getFacade()->getPlanetCollection($planetsRestApiTransfer);
    }
}
