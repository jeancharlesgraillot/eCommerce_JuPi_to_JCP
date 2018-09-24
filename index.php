
<?php
session_start();

require 'controller.php';

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'listProducts') {
          listProducts();
    }

    else if ($_GET['action'] == 'descriptionProduct') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
          descriptionProduct($_GET['id']);
      }
    }

    else if ($_GET['action'] == 'contact') {
          contact();
    }

    else if ($_GET['action'] == 'adminPage'){
          adminPage();
    }
}

else {
    listProducts();
}

// session_destroy();
