<?php
namespace Bw\AccuWeather\Logic\AccuWeather\Response;

class Temperature extends AbstractResponse
{
    public $Metric;
    
    public $Imperial;
    
    /**
     * @return \Bw\AccuWeather\Logic\AccuWeather\Response\Metric
     */
    function getMetric()
    {
        return $this->Metric;
    }

    /**
     * @return \Bw\AccuWeather\Logic\AccuWeather\Response\Imperial
     */
    function getImperial()
    {
        return $this->Imperial;
    }

    function setMetric($Metric)
    {
        $this->Metric = new Metric($Metric);
    }

    function setImperial($Imperial)
    {
        $this->Imperial = new Imperial($Imperial);
    }
}
