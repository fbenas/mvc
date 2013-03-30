<?php

include_once(SERVER_ROOT . "/views/CoreView.php");

Class CoreInView extends CoreView
{
    protected function get_css()
    {
        $out = "<link rel='stylesheet' type='text/css' href='/stylesheets/coreIn.css'>";
        $out .= "\n" . parent::get_css();
        return $out;
    }

    protected function get_mykp()
    {
        return <<<EOD
        <li class="mykp_in">
            <p>Welcome <a href="index.php?Users&<?=\$username;?>"><?=\$username;?>!</a></p>
        </li>
EOD;
    }
}

?>