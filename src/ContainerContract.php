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

use Countable;
use ArrayAccess;
use Psr\Container\ContainerInterface;

/**
 * Interface ContainerContract
 *
 * @package   Limbo\Contracts\Container
 * @author    dr0n1k  <a.dronov4job@yandex.ru>
 * @license   MIT
 * @copyright TheLimbo (c) 2022
 */
interface ContainerContract extends ContainerInterface, ArrayAccess, Countable
{
    /**
     * Add entry in container.
     *
     * @param string     $id
     * @param mixed|null $concrete
     * @param bool       $share
     * @return DefinitionContract
     */
    public function add(string $id, mixed $concrete = null, bool $share = false): DefinitionContract;

    /**
     * Get new or exists entry value from container by id.
     *
     * @param string $id
     * @param bool   $new
     * @return mixed
     */
    public function make(string $id, bool $new = false): mixed;

    /**
     * Get exists entry value from container by id.
     *
     * @param string $id
     * @return mixed
     */
    public function get(string $id): mixed;

    /**
     * Check is entry exists in container by id.
     *
     * @param string $id
     * @return bool
     */
    public function has(string $id): bool;

    /**
     * Find definition in container by id.
     *
     * @param string $id
     * @return DefinitionContract|null
     */
    public function find(string $id): DefinitionContract|null;

    /**
     * Forget entry in container by id.
     *
     * @param string $id
     * @return void
     */
    public function forget(string $id): void;

    /**
     * Get all bound definitions in container.
     *
     * @return iterable<DefinitionContract>
     */
    public function definitions(): iterable;

    /**
     * Get count size of bound definitions in container.
     *
     * @return int
     */
    public function count(): int;
}
