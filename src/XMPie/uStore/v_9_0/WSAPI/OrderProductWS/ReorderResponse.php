<?php

namespace XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\OrderProductWS;

class ReorderResponse
{

    /**
     * @var int $ReorderResult
     */
    protected $ReorderResult = null;

    /**
     * @var boolean $isSuccessful
     */
    protected $isSuccessful = null;

    /**
     * @param int $ReorderResult
     * @param boolean $isSuccessful
     */
    public function __construct($ReorderResult = null, $isSuccessful = null)
    {
      $this->ReorderResult = $ReorderResult;
      $this->isSuccessful = $isSuccessful;
    }

    /**
     * @return int
     */
    public function getReorderResult()
    {
      return $this->ReorderResult;
    }

    /**
     * @param int $ReorderResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\OrderProductWS\ReorderResponse
     */
    public function setReorderResult($ReorderResult)
    {
      $this->ReorderResult = $ReorderResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSuccessful()
    {
      return $this->isSuccessful;
    }

    /**
     * @param boolean $isSuccessful
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\OrderProductWS\ReorderResponse
     */
    public function setIsSuccessful($isSuccessful)
    {
      $this->isSuccessful = $isSuccessful;
      return $this;
    }

}
