<?php
class SourceOutput_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('Source-Komponente');
        $ret['generators']['child']['component']['htmlHead'] = 'SourceOutput_HtmlHead_Component';
        $ret['generators']['child']['component']['htmlBody'] = 'SourceOutput_HtmlBody_Component';
        $ret['generators']['child']['component']['css'] = 'SourceOutput_CssFiles_Component';
        $ret['generators']['child']['component']['js'] = 'SourceOutput_JsFiles_Component';
        $ret['extConfig'] = 'Kwc_Abstract_Composite_ExtConfigTabs';
        $ret['flags']['resetMaster'] = true;
        return $ret;
    }
}
