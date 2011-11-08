<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** 
* PHPed properties for CODE COMPLETION
* @property Template $template
*/ 

class MY_Controller extends CI_Controller {
    
    function __construct(){
        parent::__construct();
       // $this->load_css(array('reset.css', 'fddefault.css', 'colorbox.css'));
       // $this->load_js(array('jquery-1.5.1.min.js' , 'jquery.colorbox.js', 'jquery.cycle.all.js', 'galleria/galleria-1.2.5.js' ,'jquery.easing.1.3.js', 'fd_default.js'));            
    }
    
    protected function load_js($data = array(), $location = "/resources/js/"){
        //if no there are no javascripts then return
        if(!sizeof($data)) return;
        $this->template->append_metadata('');
        foreach($data as $item){
            $this->template->append_metadata('<script type="text/javascript" src="' . base_url() . $location . $item . '"></script>');
        }
        $this->template->append_metadata("\n");
    }
    protected function load_css($data = array(), $location = "/resources/css/"){
        //if no there are no stylesheets then return
        if(!sizeof($data)) return;
        
        $this->template->append_metadata('');
        foreach($data as $item){
            $this->template->append_metadata('<link rel="stylesheet" type="text/css" media="all" href="' . base_url() . $location . $item . '" />');
        }
        $this->template->append_metadata("\n");
    }
    protected function document_ready($jsfuncs = array()){
        //if no there are no javascript functions to run in document ready then return
        if(!sizeof($jsfuncs)) return;
        $this->template->append_metadata('<script>$(document).ready(function(){' . implode("\n", $jsfuncs) . '});</script>');        
    }

    
}