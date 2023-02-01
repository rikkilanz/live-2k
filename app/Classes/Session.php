<?php 

    class Session {
        public $user_id;
        
        public function __construct(){
            session_start();
            $this->user_id = $_SESSION['user_id'] ?? null;
        }

        public function login($id){
            session_regenerate_id();

            $this->user_id = $id;
            $_SESSION['user_id'] = $this->user_id;

        }

        public function logout(){
            unset($this->user_id);
            unset($_SESSION['user_id']);
            return true;
        }

        public function is_logged_in(){
            if(is_null($this->user_id)){
                redirect('/users/login.php');
            }else {
                return true;
            }
        }

    }

?>