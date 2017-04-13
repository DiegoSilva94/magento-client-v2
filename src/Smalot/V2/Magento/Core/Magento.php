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

namespace Smalot\V2\Magento\Core;

use Smalot\V2\Magento\ActionInterface;
use Smalot\V2\Magento\MagentoModuleAbstract;

/**
 * Class Magento
 *
 * @package Smalot\V2\Magento\Core
 */
class Magento extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve information about Magento version and edition.
     *
     * @return ActionInterface
     */
    public function getInfo()
    {
        return $this->__createAction('magentoInfo', func_get_args());
    }
}
