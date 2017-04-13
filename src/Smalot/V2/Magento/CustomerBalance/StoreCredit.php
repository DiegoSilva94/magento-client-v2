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
 * Class StoreCredit
 *
 * @package Smalot\V2\Magento\CustomerBalance
 */
class StoreCredit extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve the customer store credit balance amount.
     *
     * @param string $customerId
     * @param string $websiteId
     *
     * @return ActionInterface
     */
    public function getBalance($customerId, $websiteId)
    {
        return $this->__createAction('enterpriseCustomerbalanceBalance', func_get_args());
    }

    /**
     * Allows you to retrieve the customer store credit history information.
     *
     * @param string $customerId
     * @param string $websiteId
     *
     * @return ActionInterface
     */
    public function getHistory($customerId, $websiteId = null)
    {
        return $this->__createAction('enterpriseCustomerbalanceHistory', func_get_args());
    }
}
