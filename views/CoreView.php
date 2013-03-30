<?php

include_once(SERVER_ROOT . "/views/BaseView.php");

Class CoreView extends BaseView
{


    protected function get_page_header()
    {

        return <<<EOD
        <div id="header">
        <div class="title">
            <ul>
                <li><a href="index.php?Home"><img src="images/title2.png" alt="Kayak Porn Home"></a></li>
                <li>
                    <form class="search" target="search" action="" method="" name="searchbar">
                        <input type="text" maxlength="50" size="30" name="search_string">
                        <input class='button' type="button" value="Search">
                    </form>
                </li>
                {$this->get_mykp()}
            </ul>
        </div>
    <div class ="menu">
        {$this->get_menu_list()}
    </div>
</div>
EOD;
    }

    protected function get_mykp()
    {
        return <<<EOD
        <li><a class="mykp" href="index.php?MyKP">My KP</a></li>
EOD;
    }

    protected function get_page_footer() 
    {
        return <<<EOD
        <div class="footer">
            <ul>
                <li><a href="index.php?ContactPage">Contact</a></li>
                <li><a href="http://www.youtube.com">Youtube</a></li>
                <li><a href="http://www.vimeo.com">Vimeo</a></li>
                <li><a href="https://www.facebook.com/groups/311351108885061">Facebook Group</a></li>
                <li><a href="index.php?RegisterPage">Register</a></li>
            </ul>
        </div>
EOD;
    }


    protected function get_menu_list()
    {
        return <<<EOD
        <ul>
            <li class="current"><a href="index.php?Home">Home</a></li>
            <li><a href="index.php?Featured">Featured</a></li>
            <li><a href="index.php?Latest">Latest</a></li>
            <li><a href="index.php?MostViewed">Most Viewed</a></li>
            <li><a href="index.php?TopRated">Top Rated</a></li>
            <li><a href="index.php?AddVideo">Add Video</a></li>
        </ul>
EOD;
    }

    protected function get_script()
    {
        return "<script type='text/javascript' src='/scripts/base_script.js'></script>";
    }

    protected function get_css()
    {
        return "<link rel='stylesheet' type='text/css' href='/stylesheets/core.css'>";
    }
}

?>