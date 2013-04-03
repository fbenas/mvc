<?php

include_once(SERVER_ROOT . "/views/CoreView.php");

Class HomeView extends CoreView
{
    protected function get_page_content()
    {
        return <<<EOD
        <div class= "content" >
            <div class="homeleft">
                <a href="index.php?Featured"><h1>Featured</h1></a>
                <div class="featured">
                    <div id="left_button"></div>
                    {$this->show_featuerd_video("http://player.vimeo.com/video/40491703", 300,200)}
                    <div id="right_button"></div>
                    <div class="controls" id="clear"></div>
                </div>
                <div class="news">
                    <a href="index.php?News"><h1>News</h1></a>
                    {$this->show_latest_news()}
                </div>
            </div>
            <div class="homeright">
            <a href="index.php?Latest"><h1>Latest Videos</h1></a>
            </div>
        </div>
EOD;
    }

    protected function get_css()
    {
        $style = parent::get_css();
        $style .= "\n <link rel='stylesheet' type='text/css' href='/stylesheets/home.css'>" ;
        return $style;
    }

    protected function show_latest_news()
    {
        return <<<EOD
        <div class="news">
            <a class="small" href="index.php?News"><img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-ash3/528548_10151006501823106_1065790884_n.jpg"></a>
            <p>The latest news is this! Wow isnt that great. Check out our review of the new Thing. And we speak to John Smith about boofing!</p>
            <a class="small" href="index.php?News">more news...</a>
        </div>
EOD;
    }
}

?>
