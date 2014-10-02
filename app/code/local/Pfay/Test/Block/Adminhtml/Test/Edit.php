<?php
class Pfay_Test_Block_Adminhtml_Test_Edit extends
    Mage_Adminhtml_Block_Widget_Form_Container{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';

        $this->_blockGroup = 'test';

        $this->_controller = 'adminhtml_test';

        $this->_updateButton('save', 'label','save reference');
        $this->_updateButton('delete', 'label', 'delete reference');
    }


    public function getHeaderText()
    {
        if( Mage::registry('test_data')&&Mage::registry('test_data')->getId())
        {
            return 'Editer la reference '.$this->htmlEscape(
                Mage::registry('test_data')->getTitle()).'<br />';
        }
        else
        {
            return 'Add a contact';
        }
    }
}