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

namespace Smalot\V2\Magento\Order;

use Smalot\V2\Magento\ActionInterface;
use Smalot\V2\Magento\MagentoModuleAbstract;

/**
 * Class Order
 *
 * @package Smalot\V2\Magento\Order
 */
class Order extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new comment to the order.
     *
     * @param string $orderIncrementId
     * @param string $status
     * @param string $comment
     * @param string $notify
     *
     * @return ActionInterface
     */
    public function addComment($orderIncrementId, $status, $comment = null, $notify = null)
    {
        return $this->__createAction('salesOrderAddComment', func_get_args());
    }

    /**
     * Allows you to cancel the required order.
     *
     * @param string $orderIncrementId
     *
     * @return ActionInterface
     */
    public function cancel($orderIncrementId)
    {
        return $this->__createAction('salesOrderCancel', func_get_args());
    }

    /**
     * Allows you to place the required order on hold.
     *
     * @param string $orderIncrementId
     *
     * @return ActionInterface
     */
    public function hold($orderIncrementId)
    {
        return $this->__createAction('salesOrderHold', func_get_args());
    }

    /**
     * Allows you to retrieve the required order information.
     *
     * @param string $orderIncrementId
     *
     * @return ActionInterface
     */
    public function getInfo($orderIncrementId)
    {
        return $this->__createAction('salesOrderInfo', func_get_args());
    }

    /**
     * Allows you to retrieve the list of orders. Additional filters can be applied.
     *
     * @param array $filters
     *
     * @return ActionInterface
     */
    public function getList($filters)
    {
        return $this->__createAction('salesOrderList', func_get_args());
    }

    /**
     * Allows you to unhold the required order.
     *
     * @param string $orderIncrementId
     *
     * @return ActionInterface
     */
    public function unhold($orderIncrementId)
    {
        return $this->__createAction('salesOrderUnhold', func_get_args());
    }
}
