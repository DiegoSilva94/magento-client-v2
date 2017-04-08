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
 * Class ProductTierPrice
 *
 * @package Smalot\V2\Magento\Catalog
 */
class ProductTierPrice extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve information about product tier prices.
     *
     * @param string $productId
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function getInfo($productId, $identifierType = null)
    {
        return $this->__createAction('catalogProductAttributeTierPriceInfo', func_get_args());
    }

    /**
     * Allows you to update the product tier prices.
     *
     * @param string $productId
     * @param array  $tierPrices
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function update($productId, $tierPrices, $identifierType = null)
    {
        return $this->__createAction('catalogProductAttributeTierPriceUpdate', func_get_args());
    }
}
