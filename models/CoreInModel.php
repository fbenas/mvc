<?php

include_once(SERVER_ROOT . "models/CoreModel.php");

/*
 * The News Model does the back-end heavy lifting for the News Controller
 */

Class CoreInModel extends CoreModel
{
    public function get_data()
    {
        $data = parent::get_data();
        $data["username"] = "Beans";
        return $data;
    }
}
?>