<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Permissions_SSP;

class GetViewResult
{

    /**
     * @var string $schema
     */
    protected $schema = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $schema
     * @param string $any
     */
    public function __construct($schema = null, $any = null)
    {
      $this->schema = $schema;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getSchema()
    {
      return $this->schema;
    }

    /**
     * @param string $schema
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Permissions_SSP\GetViewResult
     */
    public function setSchema($schema)
    {
      $this->schema = $schema;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Permissions_SSP\GetViewResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}