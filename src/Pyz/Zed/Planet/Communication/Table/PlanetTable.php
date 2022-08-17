<?php
namespace Pyz\Zed\Planet\Communication\Table;
use Orm\Zed\Planet\Persistence\Map\PyzPlanetTableMap;
use Spryker\Zed\Gui\Communication\Table\AbstractTable;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;
use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
class PlanetTable extends AbstractTable
{
    /**
     * @inheritDoc
     */
    /**
     * @param \Spryker\Zed\Gui\Communication\Table\TableConfiguration $config
     *
     * @return \Spryker\Zed\Gui\Communication\Table\TableConfiguration
     */

    /** @var \Orm\Zed\Planet\Persistence\PyzPlanetQuery */
    private PyzPlanetQuery $planetQuery;
    /**
     * @param \Orm\Zed\Planet\Persistence\PyzPlanetQuery $planetQuery
     */
    public function __construct(PyzPlanetQuery $planetQuery)
    {
        $this->planetQuery = $planetQuery;
    }

    protected function configure(TableConfiguration $config): TableConfiguration
    {
        $config->setHeader([
            PyzPlanetTableMap::COL_NAME => 'Planet name',
            PyzPlanetTableMap::COL_INTERESTING_FACT => 'Interesting fact'
        ]);

        $config->setSortable([
            PyzPlanetTableMap::COL_NAME,
            PyzPlanetTableMap::COL_INTERESTING_FACT
        ]);

        $config->setSearchable([
            PyzPlanetTableMap::COL_NAME
        ]);

        return $config;
    }
    /**
     * @inheritDoc
     */
    /**
     * @param \Spryker\Zed\Gui\Communication\Table\TableConfiguration
    $config
     *
     * @return array
     */
    protected function prepareData(TableConfiguration $config): array
    {
        $planetDataItems = $this->runQuery($this->planetQuery,
            $config);
        $planetTableRows = [];
        foreach ($planetDataItems as $planetDataItem) {
            $planetTableRows[] = [
                PyzPlanetTableMap::COL_NAME =>
                    $planetDataItem[PyzPlanetTableMap::COL_NAME],
                PyzPlanetTableMap::COL_INTERESTING_FACT =>
                    $planetDataItem[PyzPlanetTableMap:: COL_INTERESTING_FACT]
            ];
        }
        return $planetTableRows;
    }
//
//    protected function prepareData(TableConfiguration $config): array
//    {
//        return $this->runQuery($this->planetQuery, $config);
//    }
}
