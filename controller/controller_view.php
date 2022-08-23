<?php


class View {

    private $data = array();
    private $render = FALSE;

    //constructor

    public function __construct($template)
    {
        try {
            $file ='view/'.$template.'.php';

            if(file_exists($file)) {
                $this->render = $file;
            }else {
                throw new Exception($file,' Error');
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function assign($variable, $value)
   {
     $this->data[$variable] = $value;

   }

   //destructor

    public function __destruct()
    {
        extract($this->data);
        include($this->render);
    }

}
?>