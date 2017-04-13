<?php

/**
 * @file
 *          Magento API Client (SOAP v1).
 *          Allows wrappers for each call, dependencies injections
 *          and code completion.
 *
 * @author  Sébastien MALOT <sebastien@malot.fr>
 * @license MIT
 * @url     <https://github.com/smalot/magento-client>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Smalot\V2\Magento\Catalog;

use Smalot\V2\Magento\ActionInterface;
use Smalot\V2\Magento\MagentoModuleAbstract;

/**
 * Class CategoryAttributes
 *
 * @package Smalot\V2\Magento\Catalog
 */
class CategoryAttributes extends MagentoModuleAbstract
{
    /**
     * Allows you to set/get the current store view.
     *
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function setCurrentStore($storeView)
    {
        return $this->__createAction('catalogCategoryAttributeCurrentStore', func_get_args());
    }

    /**
     * Allows you to retrieve the list of category attributes.
     *
     * @return ActionInterface
     */
    public function getList()
    {
        return $this->__createAction('catalogCategoryAttributeList', func_get_args());
    }

    /**
     * Allows you to retrieve the attribute options.
     *
     * @param string $attributeId
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function getOptions($attributeId, $storeView = null)
    {
        return $this->__createAction('catalogCategoryAttributeOptions', func_get_args());
    }
}
