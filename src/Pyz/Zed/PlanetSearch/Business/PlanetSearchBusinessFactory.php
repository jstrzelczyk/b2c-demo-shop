<?php

namespace Pyz\Zed\PlanetSearch\Business;

use Pyz\Zed\PlanetSearch\Business\Writer\PlanetSearchWriter;

class PlanetSearchBusinessFactory
{

    /**

     * @return \Pyz\Zed\PlanetSearch\Business\Writer\PlanetSearchWriter

     */

    public function createPlanetSearchWriter()

    {

        return new PlanetSearchWriter();

    }

}
