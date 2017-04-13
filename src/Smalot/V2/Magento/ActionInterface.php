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

namespace Smalot\V2\Magento;

/**
 * Class ActionInterface
 *
 * @package Smalot\V2\Magento
 */
interface ActionInterface
{
    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return array
     */
    public function getArguments();

    /**
     * @return array
     */
    public function execute();

}
