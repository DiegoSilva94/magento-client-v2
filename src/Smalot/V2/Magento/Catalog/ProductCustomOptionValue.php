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
 * Class ProductCustomOptionValue
 *
 * @package Smalot\V2\Magento\Catalog
 */
class ProductCustomOptionValue extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new custom option value to a custom option.
     * Note that the custom option value can be added only to the option with the Select Input Type.
     *
     * @param string $optionId
     * @param array  $data
     * @param string $store
     *
     * @return ActionInterface
     */
    public function add($optionId, $data, $store = null)
    {
        return $this->__createAction('catalogProductCustomOptionValueAdd', func_get_args());
    }

    /**
     * Allows you to retrieve full information about the specified product custom option value.
     *
     * @param string $valueId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getInfo($valueId, $store = null)
    {
        return $this->__createAction('catalogProductCustomOptionValueInfo', func_get_args());
    }

    /**
     * Allows you to retrieve the list of product custom option values.
     * Note that the method is available only for the option Select Input Type.
     *
     * @param string $optionId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getList($optionId, $store = null)
    {
        return $this->__createAction('catalogProductCustomOptionValueList', func_get_args());
    }

    /**
     * Allows you to remove the custom option value from a product.
     *
     * @param string $valueId
     *
     * @return ActionInterface
     */
    public function remove($valueId)
    {
        return $this->__createAction('catalogProductCustomOptionValueRemove', func_get_args());
    }

    /**
     * Allows you to update the product custom option value.
     *
     * @param string $valueId
     * @param array  $data
     * @param string $store
     *
     * @return ActionInterface
     */
    public function update($valueId, $data, $store = null)
    {
        return $this->__createAction('catalogProductCustomOptionValueUpdate', func_get_args());
    }
}
