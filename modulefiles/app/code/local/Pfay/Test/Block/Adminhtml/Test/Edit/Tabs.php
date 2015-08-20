<?php
  class Pfay_Test_Block_Adminhtml_Test_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
  {
     public function __construct()
     {
          parent::__construct();
          $this->setId('test_tabs');
          $this->setDestElementId('edit_form');
          $this->setTitle('Information sur le contact');
      }
      protected function _beforeToHtml()
      {
          $this->addTab('form_section', array(
                   'label' => 'Contact Information',
                   'title' => 'Contact Information',
                   'content' => $this->getLayout()
     ->createBlock('test/adminhtml_test_edit_tab_form')
     ->toHtml()
         ));
         return parent::_beforeToHtml();
    }
}
