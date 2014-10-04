<?php
class SourceOutput_CssFiles_File_Component extends AbstractFile_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('CSS-Datei');
        return $ret;
    }
}
