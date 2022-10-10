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
 * Interface DefinitionContract
 *
 * @package   Limbo\Contracts\Container
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @copyright TheLimbo 2022
 * @license   MIT
 */
interface DefinitionContract extends HasContainerContract
{
    /**
     * Is entry value in definition shared.
     *
     * @return bool
     */
    public function shared(): bool;

    /**
     * Sharing entry value in definition.
     *
     * @param bool $share
     * @return static
     */
    public function share(bool $share = false): static;

    /**
     * Get exists entry value from definition.
     *
     * @return mixed
     */
    public function get(): mixed;

    /**
     * Get new entry value from definition.
     *
     * @return mixed
     */
    public function getNew(): mixed;

    /**
     * Add ids for definition.
     *
     * @param string ...$id
     * @return static
     */
    public function addId(string ...$id): static;

    /**
     * Check is definition has id.
     *
     * @param string $id
     * @return bool
     */
    public function hasId(string $id): bool;

    /**
     * Add tags for definition.
     *
     * @param string ...$tag
     * @return static
     */
    public function addTag(string ...$tag): static;

    /**
     * Check is definition has tag.
     *
     * @param string $tag
     * @return bool
     */
    public function hasTag(string $tag): bool;
}
