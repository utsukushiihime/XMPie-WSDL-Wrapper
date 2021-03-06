<?php

namespace XMPieWsdlClient\XMPie\uStore\v_9_0\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\GetActualDelivery;
use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\GetActualDeliveryResponse;
use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\ActualDelivery;
use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\ReturnObject;
use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProducts;
use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\ArrayOfInt;
use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProductsResponse;
use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\ManualDeliveryArrived;
use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\ManualDeliveryArrivedResponse;
use XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ActualDeliveryWS\StringArray;


class FabricateActualDeliveryWS
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
    * @return GetActualDelivery
    */
    public function GetActualDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetActualDelivery = new GetActualDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetActualDelivery, $methodName)) {
                $GetActualDelivery->$methodName($paramValue);
            }
        }
        return $GetActualDelivery;
    }


   /**
    * @param array $paramAutoSet
    * @return GetActualDeliveryResponse
    */
    public function GetActualDeliveryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetActualDeliveryResponse = new GetActualDeliveryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetActualDeliveryResponse, $methodName)) {
                $GetActualDeliveryResponse->$methodName($paramValue);
            }
        }
        return $GetActualDeliveryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ActualDelivery
    */
    public function ActualDelivery($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ActualDelivery = new ActualDelivery();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ActualDelivery, $methodName)) {
                $ActualDelivery->$methodName($paramValue);
            }
        }
        return $ActualDelivery;
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


   /**
    * @param array $paramAutoSet
    * @return CreateDeliveryByOrderProducts
    */
    public function CreateDeliveryByOrderProducts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDeliveryByOrderProducts = new CreateDeliveryByOrderProducts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDeliveryByOrderProducts, $methodName)) {
                $CreateDeliveryByOrderProducts->$methodName($paramValue);
            }
        }
        return $CreateDeliveryByOrderProducts;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfInt
    */
    public function ArrayOfInt($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfInt = new ArrayOfInt();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfInt, $methodName)) {
                $ArrayOfInt->$methodName($paramValue);
            }
        }
        return $ArrayOfInt;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDeliveryByOrderProductsResponse
    */
    public function CreateDeliveryByOrderProductsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDeliveryByOrderProductsResponse = new CreateDeliveryByOrderProductsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDeliveryByOrderProductsResponse, $methodName)) {
                $CreateDeliveryByOrderProductsResponse->$methodName($paramValue);
            }
        }
        return $CreateDeliveryByOrderProductsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ManualDeliveryArrived
    */
    public function ManualDeliveryArrived($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ManualDeliveryArrived = new ManualDeliveryArrived();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ManualDeliveryArrived, $methodName)) {
                $ManualDeliveryArrived->$methodName($paramValue);
            }
        }
        return $ManualDeliveryArrived;
    }


   /**
    * @param array $paramAutoSet
    * @return ManualDeliveryArrivedResponse
    */
    public function ManualDeliveryArrivedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ManualDeliveryArrivedResponse = new ManualDeliveryArrivedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ManualDeliveryArrivedResponse, $methodName)) {
                $ManualDeliveryArrivedResponse->$methodName($paramValue);
            }
        }
        return $ManualDeliveryArrivedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return StringArray
    */
    public function StringArray($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $StringArray = new StringArray();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($StringArray, $methodName)) {
                $StringArray->$methodName($paramValue);
            }
        }
        return $StringArray;
    }



}

?>
