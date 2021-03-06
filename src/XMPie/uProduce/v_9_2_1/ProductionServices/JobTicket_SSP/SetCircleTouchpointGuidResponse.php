<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class SetCircleTouchpointGuidResponse
{

    /**
     * @var boolean $SetCircleTouchpointGuidResult
     */
    protected $SetCircleTouchpointGuidResult = null;

    /**
     * @param boolean $SetCircleTouchpointGuidResult
     */
    public function __construct($SetCircleTouchpointGuidResult = null)
    {
      $this->SetCircleTouchpointGuidResult = $SetCircleTouchpointGuidResult;
    }

    /**
     * @return boolean
     */
    public function getSetCircleTouchpointGuidResult()
    {
      return $this->SetCircleTouchpointGuidResult;
    }

    /**
     * @param boolean $SetCircleTouchpointGuidResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetCircleTouchpointGuidResponse
     */
    public function setSetCircleTouchpointGuidResult($SetCircleTouchpointGuidResult)
    {
      $this->SetCircleTouchpointGuidResult = $SetCircleTouchpointGuidResult;
      return $this;
    }

}
