<?php
class Acl extends Kwf_Acl_Component
{
    public function __construct()
    {
        parent::__construct();
        $this->add(new Kwf_Acl_Resource_MenuUrl('kwf_trl_web',
                array('text'=>trlKwf('Translation Web'), 'icon'=>'comment.png'),
                '/kwf/trl/web'), 'settings');
        $this->add(new Zend_Acl_Resource('kwf_trl_web-edit'), 'kwf_trl_web');
        $this->add(new Kwf_Acl_Resource_MenuUrl('kwf_trl_kwf',
                array('text'=>trlKwf('Translation Common'), 'icon'=>'comment.png'),
                '/kwf/trl/kwf'), 'settings');
        $this->add(new Zend_Acl_Resource('kwf_trl_kwf-edit'), 'kwf_trl_kwf');

        // To save data
        $this->add(new Zend_Acl_Resource('data_save'));
        $this->add(new Zend_Acl_Resource('data_load'));
        $this->add(new Zend_Acl_Resource('data_delete'));
        $this->allow(null, 'data_save');
        $this->allow(null, 'data_load');
        $this->allow(null, 'data_delete');

        // Admin
        $this->allow('admin', 'kwf_user_changeuser');
        $this->allow('admin', 'kwf_user_users');
    }
}
