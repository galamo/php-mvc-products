<?php
  // require_once('connection.php');

if (isset($_REQUEST['controller']) && isset($_REQUEST['action'])) {
    $controller = $_REQUEST['controller'];
    $action     = $_REQUEST['action'];
} else {
    $controller = 'login';
    $action     = 'login_page';
}

  require_once('views/layout.php');
