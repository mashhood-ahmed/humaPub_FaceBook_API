<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '1138911483210500',
  'app_secret'     => 'f1907bd6e0569486e81c7b440d0423f9',
  'default_graph_version'  => 'v9.0'
]);

?>