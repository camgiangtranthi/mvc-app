<?php

$routes['default_controller'] = 'home';
$routes['product'] = 'product/index';
$routes['home'] = 'home';
$routes['news/.+-(\d+).html'] = 'news/category/$1';