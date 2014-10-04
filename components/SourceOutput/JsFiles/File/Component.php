<?php
class SourceOutput_JsFiles_File_Component extends AbstractFile_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('JS-Datei');
        return $ret;
    }
}
