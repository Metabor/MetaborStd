<?php

declare(strict_types=1);

namespace MetaborStd;

use Traversable;

/**
 * @author Oliver Tischlinger
 */
interface NamedCollectionInterface extends Traversable
{
    /**
     * @param NamedInterface $object
     */
    public function add(NamedInterface $object): void;

    /**
     * @param string $name
     *
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * @param string $name
     *
     * @return NamedInterface
     */
    public function get(string $name): NamedInterface;

    /**
     * @return array
     */
    public function getNames(): array;
}
