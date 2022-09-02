<?php

namespace Pyz\Zed\PlanetSearch\Business;

interface PlanetSearchFacadeInterface
{

    /**

     * @param int $idPlanet

     *

     * @return void

     */

    public function publish(int $idPlanet): void;

}
