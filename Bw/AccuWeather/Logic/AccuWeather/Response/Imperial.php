<?php
namespace Bw\AccuWeather\Logic\AccuWeather\Response;

class Imperial extends AbstractResponse
{
    public $Value;
    
    public $Unit;
    
    public $UnitType;
    
    function getValue()
    {
        return $this->Value;
    }

    function getUnit()
    {
        return $this->Unit;
    }

    function getUnitType()
    {
        return $this->UnitType;
    }

    function setValue($Value)
    {
        $this->Value = $Value;
    }

    function setUnit($Unit)
    {
        $this->Unit = $Unit;
    }

    function setUnitType($UnitType)
    {
        $this->UnitType = $UnitType;
    }
}
