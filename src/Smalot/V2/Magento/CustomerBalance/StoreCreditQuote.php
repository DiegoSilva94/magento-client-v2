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

namespace Smalot\V2\Magento\CustomerBalance;

use Smalot\V2\Magento\ActionInterface;
use Smalot\V2\Magento\MagentoModuleAbstract;

/**
 * Class StoreCreditQuote
 *
 * @package Smalot\V2\Magento\CustomerBalance
 */
class StoreCreditQuote extends MagentoModuleAbstract
{
    /**
     * Allows you to remove store credit amount from the shopping cart (quote) and increase the customer store credit.
     *
     * @param string $quoteId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function removeAmount($quoteId, $store = null)
    {
        return $this->__createAction('shoppingCartCustomerbalanceRemoveAmount', func_get_args());
    }

    /**
     * Allows you to set amount from the customer store credit to the shopping cart.
     *
     * @param string $quoteId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setAmount($quoteId, $store = null)
    {
        return $this->__createAction('shoppingCartCustomerbalanceSetAmount', func_get_args());
    }
}
