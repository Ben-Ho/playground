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

        // Admin
        $this->allow('admin', 'kwf_user_changeuser');
        $this->allow('admin', 'kwf_user_users');
    }
}
