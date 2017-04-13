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

namespace Smalot\V2\Magento\CatalogInventory;

use Smalot\V2\Magento\ActionInterface;
use Smalot\V2\Magento\MagentoModuleAbstract;

/**
 * Class StockItem
 *
 * @package Smalot\V2\Magento\Catalog
 */
class StockItem extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve the list of stock data by product IDs.
     *
     * @param array $productIds
     *
     * @return ActionInterface
     */
    public function getList($productIds)
    {
        return $this->__createAction('catalogInventoryStockItemList', func_get_args());
    }

    /**
     * Allows you to update the required product stock data.
     *
     * @param string $productId
     * @param array  $data
     *
     * @return ActionInterface
     */
    public function update($productId, $data)
    {
        return $this->__createAction('catalogInventoryStockItemUpdate', func_get_args());
    }
}
