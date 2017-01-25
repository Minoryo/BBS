<?php


class Bbs {
  private $_title = [];

  public function getTitle() {
    return $this->_title;
  }

  public function setTitle($title) {
    array_push($this->_title, $title);
  }
}
