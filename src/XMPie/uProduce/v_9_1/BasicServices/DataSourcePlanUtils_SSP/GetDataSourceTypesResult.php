<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSourcePlanUtils_SSP;

class GetDataSourceTypesResult
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypesResult
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypesResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
