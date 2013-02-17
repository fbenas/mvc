<?php
include_once(SERVER_ROOT . "/views/BaseView.php");
Class Test extends BaseView
{
    protected function get_page_header()
    {
        return <<<EOD
<div id='header_class'>
            <div class='logo_class'>
                <?=\$header_test;?> YES YES YES
            </div>
        </div>
EOD;
    }
}
?>