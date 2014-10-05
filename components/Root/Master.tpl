<?=$this->doctype('XHTML1_STRICT');?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
        <?=$this->includeCode('header')?>
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body class="frontend">
        <div class="pageWrapper">
            <div id="page">
                <div id="outerHeader">
                    <div id="header">
                        <div id="mainMenu">
                            <?=$this->component($this->boxes['mainMenu']);?>
                        </div>
                    </div>
                </div>
                <div id="outerContent">
                    <div id="content">
                        <div id="innerContent">
                            <?=$this->component($this->data);?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div id="outerFooter">
                    <div id="footer" class="webStandard">
                    </div>
                </div>
            </div>
        </div>
        <?=$this->includeCode('footer')?>
    </body>
</html>
