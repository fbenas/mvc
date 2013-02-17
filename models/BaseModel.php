<?php
/*
 * The News Model does the back-end heavy lifting for the News Controller
 */

class BaseModel
{
    /*
     * Array of articles. Array keys are titles, array values are corresponding
     * articles
     */
    private $data = array
    (
        // article 1
        'page_stylesheet' => "/stylesheets/stylesheet.css",
        'page_title' => "Base Page",
        'page_script' => "/stylesheets/base_script.js",
        'page_keywords' => "kayaking, kayakporn, boats, boat, boating, paddle, paddeling, videos, media, gopro",
        'page_description' => "The base page for kayakporn.com",
        'page_author' => "Kayakporn.com",
        'footer_test' => "Footer test",
        'content_test'=> "Content Test",
        'header_test' => "Header Test"
    );

    public function __construct()
    {
    }

    /*
     * Fetches article based on supplied name
     *
     * @param string $articleName
     *
     * @return array $article
     */
    public function get_data()
    {
        // fetch data from array
       return $this->data; 
    }
}
?>