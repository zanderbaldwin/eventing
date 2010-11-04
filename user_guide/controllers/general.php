<?php

  if (!defined('E_FRAMEWORK')) {
    headers_sent() || header('HTTP/1.1 404 Not Found', true, 404);
    exit('Direct script access is disallowed.');
  }
  
  final class general extends E_controller {
  
    public function __construct() {
      parent::__construct();
    }
  
    public function index() {
      $this->template->create(array('shell', 'nav', 'content' => 'index'));
      $this->template->link(array('shell' => array('nav', 'content')));
      $this->template->load('shell');
    }

    public function requirements() {
    	$this->template->create(array('shell', 'nav', 'content' => 'general/requirements'));
      $this->template->link(array('shell' => array('nav', 'content')));
      $this->template->load('shell');
    }
    
  }