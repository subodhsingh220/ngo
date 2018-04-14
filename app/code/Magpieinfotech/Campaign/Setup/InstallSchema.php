<?php

namespace Magpieinfotech\Campaign\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        if (version_compare($context->getVersion(), '1.0.0') < 0){

		$installer->run('create table campaign(entity_id int not null auto_increment,
                title varchar(100), 
                description text,
                lattitude varchar(100),
                longitude varchar(100),
                location varchar(250),
                date DATETIME, 
                image varchar(250),
                status int(10),
                primary key(entity_id))');
		}

        $installer->endSetup();

    }
}