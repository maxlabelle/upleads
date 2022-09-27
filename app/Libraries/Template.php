<?php

namespace App\Libraries;

class Template {
  function view($view, $data = [], $headers = true, $path = "app") {

    $uri = service('uri');

    $segments = $uri->getSegments();

    $data['_active'] = [
      'home' => (empty($segments[0]))
        ? 'active' : '',
      'pricing' => (!empty($segments[0]) && isset($segments[1]) && $segments[1] == "pricing")
        ? 'active' : '',
    ];

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
