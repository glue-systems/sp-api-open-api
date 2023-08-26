<?php

namespace Tests\Helpers;

use Psr\SimpleCache\CacheInterface;

class ArrayCache implements CacheInterface
{
    protected $storage = [];

    public function get($key, $default = null)
    {
        if ($this->has($key)) {
            return $this->storage[$key];
        }
        return $default;
    }

    public function set($key, $value, $ttl = null)
    {
        $this->storage[$key] = $value;
        return true;
    }

    public function delete($key)
    {
        unset($this->storage[$key]);
        return true;
    }

    public function clear()
    {
        throw new \RuntimeException("Method not implemented.");
    }

    public function getMultiple($keys, $default = null)
    {
        throw new \RuntimeException("Method not implemented.");
    }

    public function setMultiple($values, $ttl = null)
    {
        throw new \RuntimeException("Method not implemented.");
    }

    public function deleteMultiple($keys)
    {
        throw new \RuntimeException("Method not implemented.");
    }

    public function has($key)
    {
        return array_key_exists($key, $this->storage);
    }
}
