<?php
class Data_SaveController extends Kwf_Controller_Action
{
    public function indexAction()
    {
        if (!$this->_getParam('userName')) throw new Kwf_Exception('userName muss gesetzt sein!');
        if (!$this->_getParam('key')) throw new Kwf_Exception('key muss gesetzt sein!');
        if (!$this->_getParam('value')) throw new Kwf_Exception('value muss gesetzt sein!');
        $select = new Kwf_Model_Select();
        $select->whereEquals('user_name', $this->_getParam('userName'));
        $select->whereEquals('key', $this->_getParam('key'));
        $keyValueRow = Kwf_Model_Abstract::getInstance('KeyValue')->getRow($select);
        $type = 'update';
        if (!$keyValueRow) {
            $keyValueRow = Kwf_Model_Abstract::getInstance('KeyValue')->createRow();
            $type = 'insert';
        }
        $keyValueRow->user_name = $this->_getParam('userName');
        $keyValueRow->key = $this->_getParam('key');
        $keyValueRow->value = $this->_getParam('value');
        $keyValueRow->save();
        echo json_encode(array(
            'type' => $type,
            'success' => 'true'
        ));
        exit;
    }
}
