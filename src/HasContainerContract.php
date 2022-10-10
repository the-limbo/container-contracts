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

/**
 * Interface HasContainerContract
 *
 * @package   Limbo\Contracts\Container
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @copyright TheLimbo 2022
 * @license   MIT
 */
interface HasContainerContract
{
    /**
     * Get instance of container.
     *
     * @return ContainerContract
     */
    public function getContainer(): ContainerContract;

    /**
     * Set instance of container.
     *
     * @param ContainerContract $container
     * @return static
     */
    public function setContainer(ContainerContract $container): static;
}
