<?php

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface NamedCollectionInterface extends \Traversable
{
    /**
     * @param NamedInterface $object
     */
    public function add(NamedInterface $object);

    /**
     * @param string $name
     *
     * @return bool
     */
    public function has($name);

    /**
     * @param string $name
     *
     * @return NamedInterface
     */
    public function get($name);

    /**
     * @return array
     */
    public function getNames();
}
