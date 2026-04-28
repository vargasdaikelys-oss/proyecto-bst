<?php require_once __DIR__ . '/vendor/autoload.php';
$controller = new ProyectoController(); $action =
 isset($_GET['action']) ? $_GET['action'] : 'index'; 
  switch ($action) {
     case 'index': $controller->index();
      break;
    case 'crear': $controller->crear();
     break;
      case 'guardar': $controller->guardar(); 
    break;
     case 'eliminar': $controller->eliminar();
     break;
      default: $controller->index(); }