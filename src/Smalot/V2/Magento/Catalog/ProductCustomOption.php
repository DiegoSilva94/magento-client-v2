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
 * Class ProductCustomOption
 *
 * @package Smalot\V2\Magento\Catalog
 */
class ProductCustomOption extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new custom option for a product.
     *
     * @param string $productId
     * @param array  $data
     * @param string $store
     *
     * @return ActionInterface
     */
    public function add($productId, $data, $store = null)
    {
        return $this->__createAction('catalogProductCustomOptionAdd', func_get_args());
    }

    /**
     * Allows you to retrieve full information about the custom option in a product.
     *
     * @param string $optionId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getInfo($optionId, $store = null)
    {
        return $this->__createAction('catalogProductCustomOptionInfo', func_get_args());
    }

    /**
     * Allows you to retrieve the list of custom options for a specific product.
     *
     * @param string $productId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getList($productId, $store = null)
    {
        return $this->__createAction('catalogProductCustomOptionList', func_get_args());
    }

    /**
     * Allows you to remove a custom option from the product.
     *
     * @param string $optionId
     *
     * @return ActionInterface
     */
    public function remove($optionId)
    {
        return $this->__createAction('catalogProductCustomOptionRemove', func_get_args());

    }

    /**
     * Allows you to retrieve the list of available custom option types.
     *
     * @return ActionInterface
     */
    public function getTypes()
    {
        return $this->__createAction('catalogProductCustomOptionTypes', func_get_args());
    }

    /**
     * Allows you to update the required product custom option.
     *
     * @param string $optionId
     * @param array  $data
     * @param string $store
     *
     * @return ActionInterface
     */
    public function update($optionId, $data, $store = null)
    {
        return $this->__createAction('catalogProductCustomOptionUpdate', func_get_args());
    }
}
