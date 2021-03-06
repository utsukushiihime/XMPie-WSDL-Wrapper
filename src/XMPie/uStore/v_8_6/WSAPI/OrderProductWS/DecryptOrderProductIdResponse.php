<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderProductWS;

class DecryptOrderProductIdResponse
{

    /**
     * @var int $DecryptOrderProductIdResult
     */
    protected $DecryptOrderProductIdResult = null;

    /**
     * @param int $DecryptOrderProductIdResult
     */
    public function __construct($DecryptOrderProductIdResult = null)
    {
      $this->DecryptOrderProductIdResult = $DecryptOrderProductIdResult;
    }

    /**
     * @return int
     */
    public function getDecryptOrderProductIdResult()
    {
      return $this->DecryptOrderProductIdResult;
    }

    /**
     * @param int $DecryptOrderProductIdResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderProductWS\DecryptOrderProductIdResponse
     */
    public function setDecryptOrderProductIdResult($DecryptOrderProductIdResult)
    {
      $this->DecryptOrderProductIdResult = $DecryptOrderProductIdResult;
      return $this;
    }

}
