<?php

class MainController extends Controller {

    function render(){
        
        $this->f3->set('view', 'dashboard.htm');
        echo \Template::instance()->render('layout.htm');

    }




/*     function render(){

        $messages = new Messages($this->db);
        $messages->clef = 'Thirdmsg';
        $messages->messages = 'This is the third msg from code!';
        $messages->save(); 

        $messages = new Messages($this->db);
        $msg = $messages->all()[2];

        $this->f3->set('msg',$msg);
        echo \Template::instance()->render('template.htm');
    } */

}
