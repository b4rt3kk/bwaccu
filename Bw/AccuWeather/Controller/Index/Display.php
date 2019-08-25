<?php
namespace Bw\AccuWeather\Controller\Index;

use Bw\AccuWeather\Logic\AccuWeather;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Display extends Action
{
    protected $pageFactory;
    
    protected $accuWeatherFactory;

    public function __construct(
        Context $context, 
        PageFactory $pageFactory,
        \Bw\AccuWeather\Model\AccuWeatherFactory $accuWeatherFactory
    )
    {
        $this->pageFactory = $pageFactory;
        $this->accuWeatherFactory = $accuWeatherFactory;
        
        return parent::__construct($context);
    }

    public function execute()
    {
        $model = $this->accuWeatherFactory->create();
        /* @var $model \Bw\AccuWeather\Model\AccuWeather */
        
        $logic = new AccuWeather();
        
        try {
            $response = $logic->getCurrentWeather();
            
            $model->addData([
                'location_key' => $response->getLocationKey(),
                'response_serialized' => serialize($response->getRawData()),
                'weather_text' => $response->getWeatherText(),
                'weather_icon' => $response->getWeatherIcon(),
                'is_day_time' => $response->getIsDayTime(),
                'temperature_value' => $response->getTemperature()->getMetric()->getValue(),
                'temperature_unit' => $response->getTemperature()->getMetric()->getUnit(),
                'temperature_unit_type' => $response->getTemperature()->getMetric()->getUnitType(),
            ])->save();
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
            
            return $this->_redirect('/');
        }
        
        $pageFactory = $this->pageFactory->create();
        $pageFactory->getLayout()->getBlock('index')->setResponse($response);
        
        return $pageFactory;
    }
}
