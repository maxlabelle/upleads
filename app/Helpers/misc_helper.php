<?php

function uid() {
  return hash('sha256', uniqid());
}

function suid($length = 8) {
  $str = strtolower(substr(str_shuffle(uid()), 0, $length));
  for ($i=0, $c=strlen($str); $i<$c; $i++)
    $str[$i] = (rand(0, 100) > 50
        ? strtoupper($str[$i])
        : strtolower($str[$i]));

  return $str;
}

function hasRole($roles, $role) {
  if (!empty($roles)) {
    $roles = json_decode($roles, true);
    if (is_array($roles) && in_array($role,$roles)) {
      return true;
    }
  }
  return false;
}

function roles() {
  $session = session();
  return $session->get('roles');
}

function myTheme() {
  $session = session();
  return $session->get('theme');
}

function isActive($segment) {
  $uri = service('uri');
  $segments = $uri->getSegments();

  $class = (empty($segments) && $segment == "home")
    ? 'active' : '';

  if (empty($class)) {
    $class = (!empty($segments) && isset($segments[0]) && $segment != "home" && $segments[0] === $segment)
      ? 'active' : '';
  }

  if (empty($class)) {
    $class = (!empty($segments) && isset($segments[1]) && $segments[1] === $segment)
    ? 'active' : '';
  }

  return $class;
}

function slugify($text, string $divider = '-') {
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, $divider);

  // remove duplicate divider
  $text = preg_replace('~-+~', $divider, $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

function getImage($path) {
  if(($image = file_get_contents($path)) === FALSE)  {
    return false;
  }

  $file = new \CodeIgniter\Files\File($path);
  $mimeType = $file->getMimeType();

  return ['file'=>$image,'mimeType'=>$mimeType];
}

function getDefaultConfig() {
  return (object)[
    'merchant_theme'=>getenv('app.defaultTheme'),
    'merchant_name'=>getenv('app.defaultCompany'),
    'merchant_logo_path'=>false,
    'merchant_bg_path'=>false,
    'merchant_url_slug'=>false,
  ];
}

function makeAffiliateUrl($affiliateLinkId) {
  return base_url()."/r/{$affiliateLinkId}";
}
