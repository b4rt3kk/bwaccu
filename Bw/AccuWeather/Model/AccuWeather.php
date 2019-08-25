<?php
namespace Bw\AccuWeather\Model;

class AccuWeather extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'bw_accuwather';

    protected $_cacheTag = 'bw_accuweather';
    protected $_eventPrefix = 'bw_accuweather';

    protected function _construct()
    {
        $this->_init('Bw\AccuWeather\Model\ResourceModel\AccuWeather');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
