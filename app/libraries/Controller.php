 <?php

 /*
  * This is the Base Controller
  * Loads the Models and views
  *
  */
  class Controller{
      //Load Model
      public function model($model)
      {
          //Requires Model FIle
          require_once '../app/models/'.$model.'.php';

          //Instantiate Model
          return new $model();
      }

      // load views
      public function view($view, $data=[])
      {
          # check for view file
          if(file_exists('../app/views/'.$view.'.php')){
              require_once '../app/views/'.$view.'.php';
          }else{
              die('view does not exist');
          }
      }
  }
