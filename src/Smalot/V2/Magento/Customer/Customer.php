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
 * Class Customer
 *
 * @package Smalot\V2\Magento\Customer
 */
class Customer extends MagentoModuleAbstract
{
    /**
     * Create a new customer.
     *
     * @param array $customerData
     *
     * @return ActionInterface
     */
    public function create($customerData)
    {
        return $this->__createAction('customerCustomerCreate', func_get_args());
    }

    /**
     * Delete the required customer.
     *
     * @param int $customerId
     *
     * @return ActionInterface
     */
    public function delete($customerId)
    {
        return $this->__createAction('customerCustomerDelete', func_get_args());
    }

    /**
     * Retrieve information about the specified customer.
     *
     * @param int   $customerId
     * @param array $attributes
     *
     * @return ActionInterface
     */
    public function getInfo($customerId, $attributes)
    {
        return $this->__createAction('customerCustomerInfo', func_get_args());
    }

    /**
     * Allows you to retrieve the list of customers.
     *
     * @param array $filters
     *
     * @return ActionInterface
     */
    public function getList($filters)
    {
        return $this->__createAction('customerCustomerList', func_get_args());
    }

    /**
     * Update information about the required customer.
     * Note that you need to pass only those arguments which you want to be updated.
     *
     * @param int   $customerId
     * @param array $customerData
     *
     * @return ActionInterface
     */
    public function update($customerId, $customerData)
    {
        return $this->__createAction('customerCustomerUpdate', func_get_args());
    }
}
