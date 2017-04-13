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

namespace Smalot\V2\Magento\Cart;

use Smalot\V2\Magento\ActionInterface;
use Smalot\V2\Magento\MagentoModuleAbstract;

/**
 * Class CartCustomer
 *
 * @package Smalot\V2\Magento\Cart
 */
class CartCustomer extends MagentoModuleAbstract
{
    /**
     * Allows you to set the customer addresses in the shopping cart (quote).
     *
     * @param int    $quoteId
     * @param array  $customerAddressData
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setAddresses($quoteId, $customerAddressData, $store = null)
    {
        return $this->__createAction('cartCustomerAddresses', func_get_args());
    }

    /**
     * Allows you to add information about the customer to a shopping cart (quote).
     *
     * @param int    $quoteId
     * @param array  $customerData
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setCustomer($quoteId, $customerData, $store = null)
    {
        return $this->__createAction('cartCustomerSet', func_get_args());
    }
}
