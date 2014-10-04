<?php
class SourceOutput_CssFiles_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('CSS-Dateien');
        $ret['generators']['child']['component'] = 'SourceOutput_CssFiles_File_Component';
        return $ret;
    }
}
