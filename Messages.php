<?php

class Messages
{
  private $mes_list;

  public function __construct()
  {
    // $this->mes_list = array();
    echo rand(1, 10);
  }
  public function scan($file_name)
  {
    $file_data = file_get_contents($file_name);
    $this->mes_list[] = explode("\n", $file_data);
  }
  public function print()
  {
    // foreach ($this->mes_list as $mes) {
    //   echo ('<h3>' . $mes . '</h3>');
    // }
    for ($i = 0; $i < count($this->mes_list); $i++) {
      echo "<h3>" . $i . "</h3>";
    }
  }
  public function clear_list()
  {
    $this->mes_list = array();
  }
}
