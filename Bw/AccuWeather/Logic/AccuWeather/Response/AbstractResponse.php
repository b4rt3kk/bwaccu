<?php
namespace Bw\AccuWeather\Logic\AccuWeather\Response;

abstract class AbstractResponse
{
    protected $rawData;
    
    public function __construct($data)
    {
        $this->setRawData($data);
        $this->hydrate($data);
    }
    
    public function hydrate($data)
    {
        foreach ($data as $name => $value) {
            $methodName = 'set' . $name;
            
            if (method_exists($this, $methodName)) {
                $this->{$methodName}($value);
            }
        }
    }
    
    public function setRawData($data)
    {
        $this->rawData = $data;
    }
    
    public function getRawData()
    {
        return $this->rawData;
    }
}
