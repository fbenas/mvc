<?php
Class Video
{
    function __construct($urlValue, $nameValue, $durationValue, $viewsValue, $descriptionValue, $dateValue, $userValue, $siteValue)
    {
        $this->url = $urlValue;
        $this->name = $nameValue;
        $this->duration = $durationValue;
        $this->views = $viewsValue;
        $this->description = $descriptionValue;
        $this->date = $dateValue;
        $this->user = $userValue;
        $this->site = $siteValue;
    }

    private $url;
    private $name;
    private $duration;
    private $views;
    private $description;
    private $date;
    private $user;
    private $site;

    public function get_url()
    {
        return $this->url;
    }                     
    public function set_url(String $urlValue)
    {
        $this->url = $urlValue;
    }
    public function get_name()
    {
        return $this->name;
    }                     
    public function set_name(String $nameValue)
    {
        $this->name = $nameValue;
    } 
    public function get_duration()
    {
        return $this->duration;
    }                     
    public function set_duration(String $durationValue)
    {
        $this->duration = $durationValue;
    } 
    public function get_views()
    {
        return $this->views;
    }                     
    public function set_views(String $viewsValue)
    {
        $this->views = $viewsValue;
    } 
    public function get_description()
    {
    return $this->description;
    }                     
    public function set_description(String $descriptionValue)
    {
        $this->description = $descriptionValue;
    } 
    public function get_date()
    {
        return $this->url;
    }                     
    public function set_date(String $dateValue)
    {
        $this->date = $dateValue;
    } 
    public function get_user()
    {
        return $this->user;
    }                     
    public function set_user(String $userValue)
    {
        $this->user = $userValue;
    }
    public function get_site()
    {
        return $this->site;
    }                     
    public function set_site(String $siteValue)
    {
        $this->site = $siteValue;
    }
}
?>