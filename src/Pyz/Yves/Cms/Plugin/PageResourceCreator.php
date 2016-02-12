<?php

namespace Pyz\Yves\Cms\Plugin;

use Spryker\Yves\Kernel\AbstractPlugin;

/**
 * @method \Pyz\Yves\Cms\CmsFactory getFactory()
 */
class PageResourceCreator extends AbstractPlugin
{

    /**
     * @return \Pyz\Yves\Cms\Plugin\PageResourceCreator
     */
    public function createPageResourceCreator()
    {
        return $this->getFactory()->createPageResourceCreator();
    }

}
