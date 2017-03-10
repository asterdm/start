<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author yugin
 */
class View {

    protected $data = [];


    public function __set($name, $value) {
        
        $this->data[$name] = $value;
        
    }
    
    public function display($template = 'newslist.php') {
        
        foreach ($this->data as $key => $value){
            
            $$key = $value;
        }
        
        include __DIR__.'/../view/'.$template;
        
    }



}
