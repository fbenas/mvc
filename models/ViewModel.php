<?php
/*
 * Handles the view functionality of our MVC framework
 */
Class ViewModel
{
    /*
     * Holds variables assigned to template
     */
    private $data = array();

    /*
     * Holds render status of view.
     */
    private $render = FALSE;
    private $class = FALSE;

    /*
     * Accept a template to load
     */
    public function __construct( $template )
    {
        // compose file name
        $file = SERVER_ROOT . 'views/' . $template . '.php';
        if (file_exists( $file ))
        {
            /*
             * trigger render to include file when this model is destroyed
             * if we render it now, we wouldn't be able to assign variables
             * to the view!
             */
            $this->render = $file;
            $this->class = $template;
        }
    }

    /*
     * Receives assignments from contoller and stores in local data array
     *
     * @param $variable
     * @param $value
     */
    public function assign( $variable , $value )
    {
        $this->data[$variable] = $value;
    }

    public function set_data( $data_value )
    {
        $this->data = $data_value;
    }

    public function __destruct()
    {
        include_once(SERVER_ROOT . "utils/PhpStringParser.php");
        // parse data variables into local variables, so that they render to the view
        $data = $this->data;

        // render view
        include($this->render);
        $view = new $this->class;
		$p = new PhpStringParser($data);
		print $p->parse($view->get_page_all());
    }
}
?>