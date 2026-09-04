<?php

namespace Tests;

use Psr\SimpleCache\CacheInterface;

class ArrayCache implements CacheInterface
{
    protected $storage = [];

    /**
     * Retrieve an item from the cache by key.
     *
     * @template TCacheValue
     *
     * @param  array|string  $key
     * @param  TCacheValue|(\Closure(): TCacheValue)  $default
     * @return (TCacheValue is null ? mixed : TCacheValue)
     */
    public function get($key, $default = null): mixed
    {
        if ($this->has($key)) {
            return $this->storage[$key];
        }
        return $default;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function set($key, $value, $ttl = null): bool
    {
        $this->storage[$key] = $value;
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function delete($key): bool
    {
        unset($this->storage[$key]);
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function clear(): bool
    {
        throw new \RuntimeException("Method not implemented.");
    }

    /**
     * {@inheritdoc}
     *
     * @return iterable
     */
    public function getMultiple($keys, $default = null): iterable
    {
        throw new \RuntimeException("Method not implemented.");
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function setMultiple($values, $ttl = null): bool
    {
        throw new \RuntimeException("Method not implemented.");
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function deleteMultiple($keys): bool
    {
        throw new \RuntimeException("Method not implemented.");
    }

    /**
     * Determine if an item exists in the cache.
     *
     * @param  array|string  $key
     * @return bool
     */
    public function has($key): bool
    {
        return array_key_exists($key, $this->storage);
    }
}
