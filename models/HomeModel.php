<?php

include_once(SERVER_ROOT . "models/CoreModel.php");
include_once(SERVER_ROOT . "utils/Video.php");

/*
 * The News Model does the back-end heavy lifting for the News Controller
 */

Class HomeModel extends CoreModel
{
    public function get_data()
    {
        $data = parent::get_data();
        $data['page_title'] = "KP - Home";
        $data['featured'][0] = new Video('url','name','duration','views','desription','date','user','site');
        return $data;
    }
}
?>