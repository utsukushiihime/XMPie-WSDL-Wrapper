<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductPropertyWS;

class ArrayOfProductProperty implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductProperty[] $ProductProperty
     */
    protected $ProductProperty = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductProperty[]
     */
    public function getProductProperty()
    {
      return $this->ProductProperty;
    }

    /**
     * @param ProductProperty[] $ProductProperty
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductPropertyWS\ArrayOfProductProperty
     */
    public function setProductProperty(array $ProductProperty = null)
    {
      $this->ProductProperty = $ProductProperty;
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
      return isset($this->ProductProperty[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductProperty
     */
    public function offsetGet($offset)
    {
      return $this->ProductProperty[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductProperty $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductProperty[] = $value;
      } else {
        $this->ProductProperty[$offset] = $value;
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
      unset($this->ProductProperty[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductProperty Return the current element
     */
    public function current()
    {
      return current($this->ProductProperty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductProperty);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductProperty);
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
      reset($this->ProductProperty);
    }

    /**
     * Countable implementation
     *
     * @return ProductProperty Return count of elements
     */
    public function count()
    {
      return count($this->ProductProperty);
    }

}
