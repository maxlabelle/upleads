<?php

namespace App\Libraries;

class Template {
  function view($view, $data = [], $headers = true, $path = "app") {

    $content = '';

    if ($headers) {
      $content .= view("$path/header", $data);
    }

    $content .= view("$path/$view", $data);

    if ($headers) {
      $content .= view("$path/footer", $data);
    }

    return $content;
  }
}
