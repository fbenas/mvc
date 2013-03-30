    <?php

    Class BaseView {

        function __construct()
        {
            // Initalize all the html strings
            $this->init_html_strings();
        }

        public function get_page_all()
        {
            // returns the whole html page as a strings
            $all_html = <<<EOD
<!DOCTYPE html>
<html class='base_class'>
    <head>
        <title><?=\$page_title;?></title>
        {$this->get_css()}
        {$this->get_script()}
        <meta charset='UTF-8'>
        <meta name='keywords' content='<?=\$page_keywords;?>'>
        <meta name='author' content='<?=\$page_author;?>'>
        <meta name='description' content='<?=\$page_description;?>'>
    </head>
    <body>
        {$this->get_page_header()}
        {$this->get_page_content()}
        {$this->get_page_footer()}
    </body>
</html>
EOD;
            return $all_html;
        }

        protected function get_page_header()
        {
            return $this->page_header; 
        }

        protected function get_page_content()
        {
            return $this->page_content;
        }

        protected function get_page_footer()
        {
            return $this->page_footer;
        }

        protected function get_script()
        {
        }

        protected function get_css()
        {
        }

        // HTML BODY
        private $page_header;
        private $page_content;
        private $page_footer;

        protected function init_html_strings()
        {
            // HTML BODY
            $this->page_header = <<<EOD
<div id='header_class'>
            <div class='logo_class'>
                <?=\$header_test;?>
        </div>
            <div class='navbar_class'>
                <ul><li>Test</li></ul>
            </div>
        </div>
EOD;
            $this->page_content = "<div class='content_class'><?=\$content_test?></div>";
            $this->page_footer = "<div class='footer_class'><?=\$footer_test;?></div>";
        }

    }

?>