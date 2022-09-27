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
