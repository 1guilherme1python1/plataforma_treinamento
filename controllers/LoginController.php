<?php

class LoginController extends Controller{
    public function index(){
        $array = array();
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email_input = $_POST['email'];
            $senha_input = $_POST['senha'];
            
            $email = filter_var($email_input, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL);
            $senha = md5($senha_input);
            
            $alunos = new Alunos();
            
            if($alunos->FazerLogin($email, $senha)){
                header("Location: ".BASE_URL);
            }
        }

        $this->loadView('login', $array);
    }
    public function logout(){
        unset($_SESSION['lgaluno']);
        header("Location: ".BASE_URL);
    }
}