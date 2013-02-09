<?php

/*
 * This file handles the retieval anbd serving of news articles
 */
class News_Controller
{
    /*
     * This templatye variable will hold the 'view' portion of our MVC
     * for this controller
     */
    public  $template = 'news';

    /*
     * This is the default function that will be valled by router.php
     *
     * @param array $getVars the GET variable posted to index.php
     */
    public function main( array $getVars )
    {
        $newsModel = new News_Model;

        // get an article
        $article = $newsModel->get_article($getVars['article']);

        // create a new view and pass it our template 
        $view = new View_Model($this->template);

        // assign article data to view
        $view->assign('title', $article['title']);
        $view->assign('content', $article['content']);
    }
}
?>
