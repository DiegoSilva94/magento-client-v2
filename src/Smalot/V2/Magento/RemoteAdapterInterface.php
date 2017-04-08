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
 * Interface RemoteAdapterInterface
 *
 * @package Smalot\V2\Magento
 */
interface RemoteAdapterInterface
{
    /**
     * @param ActionInterface $action
     * @param bool            $throwsException
     *
     * @return array
     * @throws \Exception
     */
    public function call(ActionInterface $action, $throwsException = true);

    /**
     * @return bool
     */
    public function ping();
}
