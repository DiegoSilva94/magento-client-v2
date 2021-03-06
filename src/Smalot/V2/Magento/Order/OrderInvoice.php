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
 * Class OrderInvoice
 *
 * @package Smalot\V2\Magento\Order
 */
class OrderInvoice extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new comment to the order invoice.
     *
     * @param string $invoiceIncrementId
     * @param string $comment
     * @param int    $email
     * @param int    $includeComment
     *
     * @return ActionInterface
     */
    public function addComment($invoiceIncrementId, $comment = null, $email = null, $includeComment = null)
    {
        return $this->__createAction('salesOrderInvoiceAddComment', func_get_args());
    }

    /**
     * Allows you to cancel the required invoice.
     * Note that not all order invoices can be canceled.
     * Only some payment methods support canceling the order invoice
     * (e.g., Google Checkout, PayPal Pro, PayPal Express Checkout).
     *
     * @param string $invoiceIncrementId
     *
     * @return ActionInterface
     */
    public function cancel($invoiceIncrementId)
    {
        return $this->__createAction('salesOrderInvoiceCancel', func_get_args());
    }

    /**
     * Allows you to capture the required invoice.
     * Note that not all order invoices can be captured.
     * Only some payment methods support capturing the order invoice (e.g., PayPal Pro).
     *
     * @param string $invoiceIncrementId
     *
     * @return ActionInterface
     */
    public function capture($invoiceIncrementId)
    {
        return $this->__createAction('salesOrderInvoiceCapture', func_get_args());
    }

    /**
     * Allows you to create a new invoice for an order.
     *
     * @param string $orderIncrementId
     * @param array  $itemsQty
     * @param string $comment
     * @param string $email
     * @param string $includeComment
     *
     * @return ActionInterface
     */
    public function create($orderIncrementId, $itemsQty, $comment, $email, $includeComment)
    {
        return $this->__createAction('salesOrderInvoiceCreate', func_get_args());
    }

    /**
     * @param string $invoiceIncrementId
     *
     * @return ActionInterface
     */
    public function getInfo($invoiceIncrementId)
    {
        return $this->__createAction('salesOrderInvoiceInfo', func_get_args());
    }

    /**
     * @param array $filters
     *
     * @return ActionInterface
     */
    public function getList($filters = null)
    {
        return $this->__createAction('salesOrderInvoiceList', func_get_args());
    }
}
