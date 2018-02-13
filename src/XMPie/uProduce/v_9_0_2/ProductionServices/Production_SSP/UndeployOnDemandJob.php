<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\Production_SSP;

class UndeployOnDemandJob
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inJobID
     */
    protected $inJobID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobID
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobID = $inJobID;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\Production_SSP\UndeployOnDemandJob
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\Production_SSP\UndeployOnDemandJob
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobID()
    {
      return $this->inJobID;
    }

    /**
     * @param string $inJobID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\Production_SSP\UndeployOnDemandJob
     */
    public function setInJobID($inJobID)
    {
      $this->inJobID = $inJobID;
      return $this;
    }

}
