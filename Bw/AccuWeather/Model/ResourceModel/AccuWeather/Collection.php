<?php
namespace Bw\AccuWeather\Model\ResourceModel\AccuWeather;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'bw_accuweather_collection';
    protected $_eventObject = 'bw_accuweather_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Bw\AccuWeather\Model\AccuWeather', 'Bw\AccuWeather\Model\ResourceModel\AccuWeather');
    }
}
