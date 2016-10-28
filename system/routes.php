<?php
class System_routes {
  function __construct($path) {
    //1 if
    if(isset($path[1]) && !empty($path[1])){
      $ctrl = $path[1];
      //2 if
      if(file_exists('controllers/'.$ctrl.'.php')){
        require_once('controllers/'.$ctrl.'.php');
        $ctrl = ucfirst($ctrl);
        //3 if
        if(class_exists($ctrl, FALSE)){
          $ctrl_obj = new $ctrl;
          //4 if
          if(isset($path[2]) && !empty($path[2])){
            $method = $path[2];
            //5 if
            if(method_exists($ctrl_obj, $method)){
              //6 if
              if(isset($path[3]) && !empty($path[3])){
                $params = array_slice($path,3);
                call_user_func_array([$ctrl_obj,$method],$params);
              }
              //6 else
              else {
                $ctrl_obj->$method();
              }
            }
            //5 else
            else {
              include 'controllers/error.php';
              $def_obj = new Error();
              $def_obj->index();
            }
          }
          //4 else
          else {
            $ctrl_obj->index();
          }
        }
        //3 else
        else {
          include 'controllers/error.php';
          $def_obj = new Error();
          $def_obj->index();
        }
      }
      //2 else
      else {
        include 'controllers/error.php';
        $def_obj = new Error();
        $def_obj->index();
      }
    }
    //1 else
    else{
      include 'controllers/home.php';
      $def_obj = new Home();
      $def_obj->index();
    }
  }
}

