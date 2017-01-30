<?php

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'utf-8');
}

class Bbs {
  private $_keijibanfile = 'keijiban.txt';
  private $_title = '';

  public function writeData() {
    $date = date('Y年m月d日 H:i:s');
    $this->_title = h($_POST['title']) . $date . "\n";
    $fp = fopen($this->_keijibanfile, 'a');
    fwrite($fp, $this->_title);
    fclose($fp);
    header("Location: http:");
  }

  public function getData() {
    $fp = fopen($this->_keijibanfile, 'r');
    $data = [];
    if ($fp) {
      while ($line = fgets($fp)) {
        array_push($data, $line);
      }
    }

    fclose($fp);
    return $data;
  }
}
