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

function isActive($segment) {
  $uri = service('uri');
  $segments = $uri->getSegments();

  $class = (empty($segments[0]) && $segment === 'home')
    ? 'active' : '';

  if (empty($class)) {
    $class = (!empty($segments[0]) && isset($segments[0]) && $segments[0] === $segment)
      ? 'active' : '';
  }

  if (empty($class)) {
    $class = (!empty($segments[0]) && isset($segments[1]) && $segments[1] === $segment)
    ? 'active' : '';
  }
  
  return $class;
}