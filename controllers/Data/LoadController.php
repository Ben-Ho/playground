<?php
class Data_LoadController extends Kwf_Controller_Action
{
    public function indexAction()
    {
        if (!$this->_getParam('userName')) throw new Kwf_Exception('userName muss gesetzt sein!');
        if (!$this->_getParam('key')) throw new Kwf_Exception('key muss gesetzt sein!');
        $select = new Kwf_Model_Select();
        $select->whereEquals('user_name', $this->_getParam('userName'));
        $select->whereEquals('key', $this->_getParam('key'));
        $keyValueRow = Kwf_Model_Abstract::getInstance('KeyValue')->getRow($select);
        if ($keyValueRow) {
            echo json_encode(array(
                'value' => $keyValueRow->value,
                'success' => 'true'
            ));
        } else {
            echo json_encode(array(
                'success' => 'false'
            ));
        }
        exit;
    }
}
