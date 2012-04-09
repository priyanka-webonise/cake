<?php
class FormtestsController extends AppController
{
    var $helpers = array('Form');
    var $name = "formtests";

    function index()
    {
        echo "Testing form helper!!!";
    }

    function add()
    {
        //$this->loadModel('formtests');
        //pr($this->data);die;
        $this->Formtest->create();
        $this->Formtest->save($this->data);
    }
}

?>
