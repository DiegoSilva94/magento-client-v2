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
 * Class ProductLink
 *
 * @package Smalot\V2\Magento\Catalog
 */
class ProductLink extends MagentoModuleAbstract
{
    const TYPE_CROSS_SELL = 'cross-sell';

    const TYPE_UP_SELL = 'up-sell';

    const TYPE_GROUPED = 'grouped';

    /**
     * Allows you to assign a product link (related, cross-sell, up-sell, or grouped) to another product.
     *
     * @param string $type
     * @param string $productId
     * @param string $linkedProductId
     * @param array  $data
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function assign($type, $productId, $linkedProductId, $data, $identifierType = null)
    {
        return $this->__createAction('catalogProductLink.assign', func_get_args());
    }

    /**
     * Allows you to retrieve the product link type attributes.
     *
     * @param string $type
     *
     * @return ActionInterface
     */
    public function getAttributes($type)
    {
        return $this->__createAction('catalogProductLink.attributes', func_get_args());
    }

    /**
     * Allows you to retrieve the list of linked products for a specific product.
     *
     * @param string $type
     * @param string $productId
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function getList($type, $productId, $identifierType = null)
    {
        return $this->__createAction('catalogProductLink.list', func_get_args());
    }

    /**
     * Allows you to remove the product link from a specific product.
     *
     * @param string $type
     * @param string $productId
     * @param string $linkedProductId
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function remove($type, $productId, $linkedProductId, $identifierType = null)
    {
        return $this->__createAction('catalogProductLinkRemove', func_get_args());
    }

    /**
     * Allows you to retrieve the list of product link types.
     *
     * @return ActionInterface
     */
    public function getTypes()
    {
        return $this->__createAction('catalogProductLinkTypes', func_get_args());
    }

    /**
     * Allows you to update the product link.
     *
     * @param string $type
     * @param string $productId
     * @param string $linkedProductId
     * @param array  $data
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function update($type, $productId, $linkedProductId, $data, $identifierType = null)
    {
        return $this->__createAction('catalogProductLinkUpdate', func_get_args());
    }
}
