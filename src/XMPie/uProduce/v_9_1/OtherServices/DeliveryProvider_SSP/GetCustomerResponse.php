<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\DeliveryProvider_SSP;

class GetCustomerResponse
{

    /**
     * @var string $GetCustomerResult
     */
    protected $GetCustomerResult = null;

    /**
     * @param string $GetCustomerResult
     */
    public function __construct($GetCustomerResult = null)
    {
      $this->GetCustomerResult = $GetCustomerResult;
    }

    /**
     * @return string
     */
    public function getGetCustomerResult()
    {
      return $this->GetCustomerResult;
    }

    /**
     * @param string $GetCustomerResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\DeliveryProvider_SSP\GetCustomerResponse
     */
    public function setGetCustomerResult($GetCustomerResult)
    {
      $this->GetCustomerResult = $GetCustomerResult;
      return $this;
    }

}
