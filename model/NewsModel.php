<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsModel
 *
 * @author yugin
 */
class NewsModel extends AbstractModel{
    
    public $id;
    public $title;
    public $text;
    public $date;
    public $url;
    protected static $table = 'news';
    
}
