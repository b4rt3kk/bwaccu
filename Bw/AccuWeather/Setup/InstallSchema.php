<?php
namespace Bw\AccuWeather\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
		$installer->startSetup();
        
        if (!$installer->tableExists('bw_accuweather')) {
            $table = $installer->getConnection()->newTable($installer->getTable('bw_accuweather'));
            
            $table->addColumn('id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, [
                'identity' => true,
                'nullable' => false,
                'primary' => true,
                'unsigned' => true,
            ]);
            
            $table->addColumn('location_key', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER);
            
            $table->addColumn('response_serialized', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT);
            
            $table->addColumn('weather_text', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT);
            
            $table->addColumn('weather_icon', \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT);
            
            $table->addColumn('is_day_time', \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN);
            
            $table->addColumn('temperature_value', \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT);
            
            $table->addColumn('temperature_unit', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT);
            
            $table->addColumn('temperature_unit_type', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER);
            
            $table->addColumn('created_at', \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null, [
                'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE,
                'nullable' => false,
            ]);
            
            $installer->getConnection()->createTable($table);
            
            $installer->getConnection()->addIndex($installer->getTable('bw_accuweather'), 'bw_accuweather_location_key_idx', [
                'location_key',
            ]);
        }
        
        $installer->endSetup();
    }
}
