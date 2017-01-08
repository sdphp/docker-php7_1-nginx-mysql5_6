<?php

require_once __DIR__ . '/base.php';

echo '<pre>';
var_dump($repo->get(1));

var_dump($repo->get(10));

var_dump($repo->search('car'));

var_dump($repo->search(null));

var_dump($repo->search());
