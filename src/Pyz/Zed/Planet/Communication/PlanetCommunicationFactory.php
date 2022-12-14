<?php
namespace Pyz\Zed\Planet\Communication;
use Generated\Shared\Transfer\PlanetTransfer;
use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
use Pyz\Zed\Planet\Communication\Form\PlanetForm;
use Pyz\Zed\Planet\PlanetDependencyProvider;
use Pyz\Zed\Planet\Communication\Table\PlanetTable;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Symfony\Component\Form\FormInterface;

class PlanetCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \Pyz\Zed\Planet\Communication\Table\PlanetTable
     * @throw \Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function createPlanetTable(): PlanetTable
    {
        return new PlanetTable($this->getPlanetPropelQuery());
    }

    /**
     * @return \Orm\Zed\Planet\Persistence\PyzPlanetQuery
     * @throws \Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    private function getPlanetPropelQuery(): PyzPlanetQuery
    {
        return $this->getProvidedDependency(PlanetDependencyProvider::QUERY_PLANET);
}
    /**

     * @param \Generated\Shared\Transfer\PlanetTransfer|null $planetTransfer

     * @param array $options

     *

     * @return \Symfony\Component\Form\FormInterface

     */
    public function createPlanetForm(?PlanetTransfer $planetTransfer = null, array $options = []): FormInterface
    {

        return $this->getFormFactory()->create(

            PlanetForm::class,

            $planetTransfer,

            $options

        );

    }
}
