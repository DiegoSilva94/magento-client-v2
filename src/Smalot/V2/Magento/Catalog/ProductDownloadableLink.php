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
 * Class ProductDownloadableLink
 *
 * @package Smalot\V2\Magento\Catalog
 */
class ProductDownloadableLink extends MagentoModuleAbstract
{
    const TYPE_SAMPLE = 'sample';

    const TYPE_LINK = 'link';

    /**
     * Allows you to add a new link to a downloadable product.
     *
     * @param string $productId
     * @param array  $resource
     * @param string $resourceType
     * @param string $store
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function add($productId, $resource, $resourceType, $store = null, $identifierType = null)
    {
        return $this->__createAction('catalogProductDownloadableLinkAdd', func_get_args());
    }

    /**
     * Allows you to retrieve a list of links of a downloadable product.
     *
     * @param string $productId
     * @param string $store
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function getList($productId, $store = null, $identifierType = null)
    {
        return $this->__createAction('catalogProductDownloadableLinkList', func_get_args());
    }

    /**
     * Allows you to remove a link/sample from a downloadable product.
     *
     * @param string $linkId
     * @param string $resourceType
     *
     * @return ActionInterface
     */
    public function remove($linkId, $resourceType)
    {
        return $this->__createAction('catalogProductDownloadableLinkRemove', func_get_args());
    }
}
