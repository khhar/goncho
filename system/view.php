<?php
    class System_view {
        public function render($page,$hf = TRUE){
            if(file_exists('views/admin/'.$page.'.php')){
                if(!$hf){
                    include 'views/admin/'.$page.'.php';
                }
                else {
                    include 'views/layout/admin/header.php';
                    include 'views/admin/'.$page.'.php';
                    include 'views/layout/admin/footer.php';
                }
            }
            else if(file_exists('views/'.$page.'.php')){
                if(!$hf){
                    include 'views/'.$page.'.php';
                }
                else {
                    include 'views/layout/header.php';
                    include 'views/'.$page.'.php';
                    include 'views/layout/footer.php';
                }
            }
            else {
                echo 'file not found';
            }
        }   
    }
