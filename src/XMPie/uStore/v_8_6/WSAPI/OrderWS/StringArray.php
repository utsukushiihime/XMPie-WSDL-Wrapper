<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS;

class StringArray
{

    /**
     * @var string[] $StringArray
     */
    protected $StringArray = null;

    /**
     * @param string[] $StringArray
     */
    public function __construct(array $StringArray = null)
    {
      $this->StringArray = $StringArray;
    }

    /**
     * @return string[]
     */
    public function getStringArray()
    {
      return $this->StringArray;
    }

    /**
     * @param string[] $StringArray
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\StringArray
     */
    public function setStringArray(array $StringArray)
    {
      $this->StringArray = $StringArray;
      return $this;
    }

}
