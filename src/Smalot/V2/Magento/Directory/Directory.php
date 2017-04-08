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

namespace Smalot\V2\Magento\Directory;

use Smalot\V2\Magento\ActionInterface;
use Smalot\V2\Magento\MagentoModuleAbstract;

/**
 * Class Directory
 *
 * @package Smalot\V2\Magento\Directory
 */
class Directory extends MagentoModuleAbstract
{
    /**
     * Retrieve the list of countries from Magento.
     *
     * @return ActionInterface
     */
    public function getCountryList()
    {
        return $this->__createAction('directoryCountryList', func_get_args());
    }

    /**
     * Retrieve the list of regions in the specified country.
     *
     * @param string $country
     *
     * @return ActionInterface
     */
    public function getRegionList($country)
    {
        return $this->__createAction('directoryRegionList', func_get_args());
    }
}
