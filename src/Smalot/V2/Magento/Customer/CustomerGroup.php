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
 * Class CustomerGroup
 *
 * @package Smalot\V2\Magento\Customer
 */
class CustomerGroup extends MagentoModuleAbstract
{
    /**
     * Retrieve the list of customer groups.
     *
     * @return ActionInterface
     */
    public function getGroupList()
    {
        return $this->__createAction('customerGroupList', func_get_args());
    }
}
