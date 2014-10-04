<?php
class AbstractFile_Form extends Kwc_Abstract_Form
{
    protected function _initFields()
    {
        parent::_initFields();
        $this->add(new Kwf_Form_Field_TextArea('text', trl('Text')))
            ->setHideLabel(true)
            ->setAllowTags(true)
            ->setWidth(600)
            ->setHeight(900);
    }
}
