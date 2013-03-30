<?php

/*
 * This file handles the retieval anbd serving of news articles
 */
Class BaseController
{
    /*
     * This templatye variable will hold the 'view' portion of our MVC
     * for this controller
     */
    protected $template = 'Base';

    /*
     * This is the default function that will be valled by router.php
     *
     * @param array $getVars the GET variable posted to index.php
     */
    public function main()
    {
        $model_name = $this->template . "Model";
        include_once(SERVER_ROOT . "models/" . $model_name . ".php");
        include_once(SERVER_ROOT . "models/ViewModel.php");
        $model = new $model_name;
        // get an article
        $data = $model->get_data();
        // create a new view and pass it our template 
        $view = new ViewModel($this->template . "View");
        // Pass all the model data to the view_model object.
        $view->set_data($data);
    }
}
?>