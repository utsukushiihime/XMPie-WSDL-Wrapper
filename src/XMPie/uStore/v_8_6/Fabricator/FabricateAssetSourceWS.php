<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AssetSourceWS\GetAssetSource;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AssetSourceWS\GetAssetSourceResponse;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AssetSourceWS\AssetSource;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AssetSourceWS\ReturnObject;


class FabricateAssetSourceWS
{
    private $paramAutoSet;
    
    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSource
    */
    public function GetAssetSource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSource = new GetAssetSource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSource, $methodName)) {
                $GetAssetSource->$methodName($paramValue);
            }
        }
        return $GetAssetSource;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceResponse
    */
    public function GetAssetSourceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceResponse = new GetAssetSourceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceResponse, $methodName)) {
                $GetAssetSourceResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AssetSource
    */
    public function AssetSource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AssetSource = new AssetSource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AssetSource, $methodName)) {
                $AssetSource->$methodName($paramValue);
            }
        }
        return $AssetSource;
    }


   /**
    * @param array $paramAutoSet
    * @return ReturnObject
    */
    public function ReturnObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReturnObject = new ReturnObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReturnObject, $methodName)) {
                $ReturnObject->$methodName($paramValue);
            }
        }
        return $ReturnObject;
    }



}

?>
