<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\DeliveryProvider_SSP;

class ArrayOfSetting implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Setting[] $Setting
     */
    protected $Setting = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Setting[]
     */
    public function getSetting()
    {
      return $this->Setting;
    }

    /**
     * @param Setting[] $Setting
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\DeliveryProvider_SSP\ArrayOfSetting
     */
    public function setSetting(array $Setting = null)
    {
      $this->Setting = $Setting;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Setting[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Setting
     */
    public function offsetGet($offset)
    {
      return $this->Setting[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Setting $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Setting[] = $value;
      } else {
        $this->Setting[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Setting[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Setting Return the current element
     */
    public function current()
    {
      return current($this->Setting);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Setting);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Setting);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Setting);
    }

    /**
     * Countable implementation
     *
     * @return Setting Return count of elements
     */
    public function count()
    {
      return count($this->Setting);
    }

}
