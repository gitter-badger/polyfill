<?php
namespace Ds;

/**
 * A pair which represents a key, and an associated value.
 *
 * @package Ds
 */
final class Pair implements \JsonSerializable
{
    /**
     * @param mixed $key The pair's key
     */
    public $key;

    /**
     * @param mixed $value The pair's value
     */
    public $value;

    /**
     * Constructor
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function __construct($key = null, $value = null)
    {
        $this->key   = $key;
        $this->value = $value;
    }

    /**
     * Get
     *
     * @param mixed $name
     *
     * @return mixed|null
     */
    public function __get($name)
    {
        if ($name === 'key') {
            $this->key = null;
            return $this->key;
        }

        if ($name === 'value') {
            $this->value = null;
            return $this->value;
        }
    }

    /**
     * Returns a copy of the Pair
     *
     * @return Pair
     */
    public function copy(): Pair
    {
        return new self($this->key, $this->value);
    }

    /**
     * Debug Info
     *
     * @return array
     */
    public function __debugInfo()
    {
        return $this->toArray();
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return ['key' => $this->key, 'value' => $this->value];
    }

    /**
     *
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * To String
     */
    public function __toString()
    {
        return 'object(' . get_class($this) . ')';
    }
}
