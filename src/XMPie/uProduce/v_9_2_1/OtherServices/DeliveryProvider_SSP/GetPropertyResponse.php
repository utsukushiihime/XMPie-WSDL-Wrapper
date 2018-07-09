<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\DeliveryProvider_SSP;

class GetPropertyResponse
{

    /**
     * @var Property $GetPropertyResult
     */
    protected $GetPropertyResult = null;

    /**
     * @param Property $GetPropertyResult
     */
    public function __construct($GetPropertyResult = null)
    {
      $this->GetPropertyResult = $GetPropertyResult;
    }

    /**
     * @return Property
     */
    public function getGetPropertyResult()
    {
      return $this->GetPropertyResult;
    }

    /**
     * @param Property $GetPropertyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\DeliveryProvider_SSP\GetPropertyResponse
     */
    public function setGetPropertyResult($GetPropertyResult)
    {
      $this->GetPropertyResult = $GetPropertyResult;
      return $this;
    }

}