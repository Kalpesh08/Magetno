<?php

class Meigee_Thememanager_Model_Resource_EssgridConfigData_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('gridmanager/essgridConfigData');
        //$this->_init('thememanager/theme_config_data');
    }
}