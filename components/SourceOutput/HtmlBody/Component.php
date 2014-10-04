<?php
class SourceOutput_HtmlBody_Component extends AbstractFile_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('HTML-Body Inhalt');
        return $ret;
    }
}
