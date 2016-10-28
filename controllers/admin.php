<?php
    class Admin extends System_controller {     
        public function index(){
            $this->view->error = FALSE;
            if(isset($_POST['go'])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                $admin = new Models_admin();
                $result = $admin->logIn(sha1($password), $email);
                if(!empty($result)){
                   $_SESSION['id']=$result['id'];
                   header("Location:/kino/adminaccount");
                }else{
                    $this->view->error = "wrong email or password";
                }
            }
            $this->view->render('admin-login', FALSE);    
        }
        public function logOut() {
            session_destroy ();
            header("Location:/kino/");
        }
           
    }
     
