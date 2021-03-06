<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductWS;

class GetProductThumbnailsResponse
{

    /**
     * @var ArrayOfBase64Binary $GetProductThumbnailsResult
     */
    protected $GetProductThumbnailsResult = null;

    /**
     * @param ArrayOfBase64Binary $GetProductThumbnailsResult
     */
    public function __construct($GetProductThumbnailsResult = null)
    {
      $this->GetProductThumbnailsResult = $GetProductThumbnailsResult;
    }

    /**
     * @return ArrayOfBase64Binary
     */
    public function getGetProductThumbnailsResult()
    {
      return $this->GetProductThumbnailsResult;
    }

    /**
     * @param ArrayOfBase64Binary $GetProductThumbnailsResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductWS\GetProductThumbnailsResponse
     */
    public function setGetProductThumbnailsResult($GetProductThumbnailsResult)
    {
      $this->GetProductThumbnailsResult = $GetProductThumbnailsResult;
      return $this;
    }

}
