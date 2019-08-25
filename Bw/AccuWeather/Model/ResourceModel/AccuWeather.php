<?php
namespace Bw\AccuWeather\Model\ResourceModel;

class AccuWeather extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('bw_accuweather', 'id');
	}
	
}
