<?php
class SourceOutput_HtmlHead_Component extends AbstractFile_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('HTML-Head Inhalt');
        return $ret;
    }
}
