<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** 
* PHPed properties for CODE COMPLETION
* @property Template $template
*/ 

class Welcome extends MY_Controller {

    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->template->title('Our Welcome Page');
        $this->template->set_layout('default');
        $this->template->build('pages/welcome_home');
    }    
}