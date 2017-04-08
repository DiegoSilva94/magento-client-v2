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

namespace Smalot\V2\Magento\Customer;

use Smalot\V2\Magento\ActionInterface;
use Smalot\V2\Magento\MagentoModuleAbstract;

/**
 * Class CustomerAddress
 *
 * @package Smalot\V2\Magento\Customer
 */
class CustomerAddress extends MagentoModuleAbstract
{
    /**
     * Create a new address for the customer.
     *
     * @param int   $customerId
     * @param array $addressData
     *
     * @return ActionInterface
     */
    public function create($customerId, $addressData)
    {
        return $this->__createAction('customerAddressCreate', func_get_args());
    }

    /**
     * Delete the required customer address.
     *
     * @param int $addressId
     *
     * @return ActionInterface
     */
    public function delete($addressId)
    {
        return $this->__createAction('customerAddressDelete', func_get_args());
    }

    /**
     * Retrieve information about the required customer address.
     *
     * @param int $addressId
     *
     * @return ActionInterface
     */
    public function getInfo($addressId)
    {
        return $this->__createAction('customerAddressInfo', func_get_args());
    }

    /**
     * Retrieve the list of customer addresses.
     *
     * @param int $customerId
     *
     * @return ActionInterface
     */
    public function getList($customerId)
    {
        return $this->__createAction('customerCustomerList', func_get_args());
    }

    /**
     * Update address data of the required customer.
     *
     * @param int   $addressId
     * @param array $addressData
     *
     * @return ActionInterface
     */
    public function update($addressId, $addressData)
    {
        return $this->__createAction('customerCustomerUpdate', func_get_args());
    }
}
