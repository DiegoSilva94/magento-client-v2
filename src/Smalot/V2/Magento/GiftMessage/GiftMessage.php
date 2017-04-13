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

namespace Smalot\V2\Magento\GiftMessage;

use Smalot\V2\Magento\ActionInterface;
use Smalot\V2\Magento\MagentoModuleAbstract;

/**
 * Class GiftMessage
 *
 * @package Smalot\V2\Magento\GiftMessage
 */
class GiftMessage extends MagentoModuleAbstract
{
    /**
     * Allows you to set a global gift message for the shopping cart (quote).
     *
     * @param string $quoteId
     * @param array  $giftMessage
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setForQuote($quoteId, $giftMessage, $store)
    {
        return $this->__createAction('giftMessageSetForQuote', func_get_args());
    }

    /**
     * Allows you to set a gift message for an item in the shopping cart (quote).
     *
     * @param string $quoteItemId
     * @param array  $giftMessage
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setForQuoteItem($quoteItemId, $giftMessage, $store)
    {
        return $this->__createAction('giftMessageSetForQuoteItem', func_get_args());
    }

    /**
     * Allows you to set a gift message for a product in the shopping cart (quote).
     *
     * @param string $quoteId
     * @param array  $productsAndMessages
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setForQuoteProduct($quoteId, $productsAndMessages, $store)
    {
        return $this->__createAction('giftMessageSetForQuoteProduct', func_get_args());
    }
}
