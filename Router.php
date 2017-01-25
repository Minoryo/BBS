<?php

namespace MyApp;

class Router
{
  private $_uri;

  public function __construct() {

    if ($_SERVER['REQUEST_URI']) {
      $this->_uri = $_SERVER['REQUEST_URI'];
    }

  }

  public function getURI() {
    return $this->_uri;
  }
}
