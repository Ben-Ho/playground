<?php
class SourceOutput_JsFiles_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('JS-Dateien');
        $ret['generators']['child']['component'] = 'SourceOutput_JsFiles_File_Component';
        return $ret;
    }
}
