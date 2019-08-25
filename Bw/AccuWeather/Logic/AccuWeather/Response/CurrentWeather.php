<?php
namespace Bw\AccuWeather\Logic\AccuWeather\Response;

class CurrentWeather extends AbstractResponse
{
    public $locationKey;
    
    public $LocalObservationDateTime;
    
    public $EpochTime;
    
    public $WeatherText;
    
    public $WeatherIcon;
    
    public $HasPrecipitation;
    
    public $PrecipitationType;
    
    public $IsDayTime;
    
    public $Temperature;
    
    public $MobileLink;
    
    public $Link;
    
    function getLocationKey()
    {
        return $this->locationKey;
    }

    function setLocationKey($locationKey)
    {
        $this->locationKey = $locationKey;
    }
    
    function getLocalObservationDateTime()
    {
        return $this->LocalObservationDateTime;
    }

    function getEpochTime()
    {
        return $this->EpochTime;
    }

    function getWeatherText()
    {
        return $this->WeatherText;
    }

    function getWeatherIcon()
    {
        return $this->WeatherIcon;
    }

    function getHasPrecipitation()
    {
        return $this->HasPrecipitation;
    }

    function getPrecipitationType()
    {
        return $this->PrecipitationType;
    }

    function getIsDayTime()
    {
        return $this->IsDayTime;
    }

    /**
     * @return \Bw\AccuWeather\Logic\AccuWeather\Response\Temperature
     */
    function getTemperature()
    {
        return $this->Temperature;
    }

    function getMobileLink()
    {
        return $this->MobileLink;
    }

    function getLink()
    {
        return $this->Link;
    }

    function setLocalObservationDateTime($LocalObservationDateTime)
    {
        $this->LocalObservationDateTime = $LocalObservationDateTime;
    }

    function setEpochTime($EpochTime)
    {
        $this->EpochTime = $EpochTime;
    }

    function setWeatherText($WeatherText)
    {
        $this->WeatherText = $WeatherText;
    }

    function setWeatherIcon($WeatherIcon)
    {
        $this->WeatherIcon = $WeatherIcon;
    }

    function setHasPrecipitation($HasPrecipitation)
    {
        $this->HasPrecipitation = $HasPrecipitation;
    }

    function setPrecipitationType($PrecipitationType)
    {
        $this->PrecipitationType = $PrecipitationType;
    }

    function setIsDayTime($IsDayTime)
    {
        $this->IsDayTime = $IsDayTime;
    }

    function setTemperature($Temperature)
    {
        $this->Temperature = new Temperature($Temperature);
    }

    function setMobileLink($MobileLink)
    {
        $this->MobileLink = $MobileLink;
    }

    function setLink($Link)
    {
        $this->Link = $Link;
    }
}
