<?php declare(strict_types=1);

/*
 * This file is part of the TheLimbo package.
 *
 * (c) dr0n1k <a.dronov4job@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Limbo\Contracts\Container;

use Limbo\Contracts\Factory\FactoryContract;

/**
 * Interface ContainerFactoryContract
 *
 * @package   Limbo\Contracts\Container
 * @author    dr0n1k  <a.dronov4job@yandex.ru>
 * @license   MIT
 * @copyright TheLimbo (c) 2022
 */
interface ContainerFactoryContract extends FactoryContract
{
    /**
     * Create empty container.
     *
     * @return ContainerContract
     */
    public static function create(): ContainerContract;

    /**
     * Create container with given definitions.
     *
     * @param array $definitions
     * @return ContainerContract
     */
    public function createContainer(array $definitions): ContainerContract;
}
