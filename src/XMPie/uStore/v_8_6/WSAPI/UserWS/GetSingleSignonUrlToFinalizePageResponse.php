<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\UserWS;

class GetSingleSignonUrlToFinalizePageResponse
{

    /**
     * @var string $GetSingleSignonUrlToFinalizePageResult
     */
    protected $GetSingleSignonUrlToFinalizePageResult = null;

    /**
     * @param string $GetSingleSignonUrlToFinalizePageResult
     */
    public function __construct($GetSingleSignonUrlToFinalizePageResult = null)
    {
      $this->GetSingleSignonUrlToFinalizePageResult = $GetSingleSignonUrlToFinalizePageResult;
    }

    /**
     * @return string
     */
    public function getGetSingleSignonUrlToFinalizePageResult()
    {
      return $this->GetSingleSignonUrlToFinalizePageResult;
    }

    /**
     * @param string $GetSingleSignonUrlToFinalizePageResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\UserWS\GetSingleSignonUrlToFinalizePageResponse
     */
    public function setGetSingleSignonUrlToFinalizePageResult($GetSingleSignonUrlToFinalizePageResult)
    {
      $this->GetSingleSignonUrlToFinalizePageResult = $GetSingleSignonUrlToFinalizePageResult;
      return $this;
    }

}
