<?php
class Essential_Gridmanager_Block_Adminhtml_Datahandling_Grid extends Mage_Adminhtml_Block_Widget_Grid {

  protected function _prepareCollection()
    {
			
      $this->setPagerVisibility(false);
        $this->setFilterVisibility(false);
		$this->setSaveParametersInSession(true);
        return parent::_prepareCollection(); 
    }
	protected function _prepareColumns() {
		
		//$this->setTemplate('gridmanager/settingtemplate.phtml');	
		return parent::_prepareColumns();
	}

}
