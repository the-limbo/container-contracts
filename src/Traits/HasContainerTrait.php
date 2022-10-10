<?php declare(strict_types=1);

/*
 * This file is part of the TheLimbo package.
 *
 * (c) dr0n1k <a.dronov4job@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Limbo\Contracts\Container\Traits;

use RuntimeException;
use Limbo\Contracts\Container\ContainerContract;

/**
 * Trait HasContainerTrait
 *
 * @package   Limbo\Contracts\Container\Traits
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @copyright TheLimbo 2022
 * @license   MIT
 */
trait HasContainerTrait
{
    /**
     * Instance of container.
     *
     * @var ContainerContract
     */
    private ContainerContract $container;

    /**
     * @inheritDoc
     */
    public function getContainer(): ContainerContract
    {
        if (isset($this->container) === true) {
            return $this->container;
        }

        throw new RuntimeException(
            message: 'Container not instantiate in (' . static::class . ').'
        );
    }

    /**
     * @inheritDoc
     */
    public function setContainer(ContainerContract $container): static
    {
        $this->container = $container;

        return $this;
    }
}
