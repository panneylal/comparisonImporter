<?php
class Pfay_Test_Block_Adminhtml_Test_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
   protected function _prepareForm()
   {
       $form = new Varien_Data_Form();
       $this->setForm($form);
       $fieldset = $form->addFieldset('test_form',
                                       array('legend'=>'ref information'));
        $fieldset->addField('nom', 'text',
                       array(
                          'label' => 'Nom',
                          'class' => 'required-entry',
                          'required' => true,
                           'name' => 'nom',
                    ));
        $fieldset->addField('prenom', 'text',
                         array(
                          'label' => 'Prenom',
                          'class' => 'required-entry',
                          'required' => true,
                          'name' => 'prenom',
                      ));
          $fieldset->addField('telephone', 'text',
                    array(
                        'label' => 'telephone',
                        'class' => 'required-entry',
                        'required' => true,
                        'name' => 'telephone',
                 ));
 if ( Mage::registry('test_data') )
 {
    $form->setValues(Mage::registry('test_data')->getData());
  }
  return parent::_prepareForm();
 }
}
