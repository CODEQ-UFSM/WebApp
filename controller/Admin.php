<?php

class Admin extends Controller{
    
    protected $login;
    
    public function __construct(){
        parent::__construct();
        $this->view->setTemplate('admin/directus/public');
       
    }
    public function index(){
        $this->view->load('index');
    }
    
}

