<?php
namespace Bw\AccuWeather\Block;

class Display extends \Magento\Framework\View\Element\Template
{

    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function sayHello()
    {   
        return __('Hello World');
    }
    
    public function index()
    {
        return __('Hello World');
    }
}
