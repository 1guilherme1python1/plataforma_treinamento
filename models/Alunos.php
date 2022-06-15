<?php
class Alunos extends Model{

    private $info;

    public function isLogged(){
        if(isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno'])){
            return true;
        } else {
            return false;
        } 
    }
    public function FazerLogin($email, $senha){
        $sql = $this->db->query("SELECT * FROM alunos WHERE email='$email' AND senha = '$senha'");

        if($sql->rowCount()>0){
            $row=$sql->fetch(PDO::FETCH_ASSOC);
            // echo '<pre>';
            // print_r($row);
            // exit;
            $_SESSION['lgaluno'] = $row['id'];
            return true;
        } else {
            return false;
        }
    }
    public function setAluno($id){
        $sql = $this->db->query("SELECT * FROM alunos WHERE id='$id'");

        if($sql->rowCount()>0){
            $this->info = $sql->fetch(PDO::FETCH_ASSOC);
        }
    }
    public function getNome(){
        return $this->info['nome'];
    }
    public function getId(){
        return $this->info['id'];
    }

    public function isIncrito($id_curso){
        $sql = $this->db->query("SELECT * FROM aluno_cursos WHERE id_aluno='".($this->info['id'])."' AND  id_curso = '$id_curso'");
        
        if($sql->rowCount()>0){
            return true;
        } else{
            return false;
        }
    }

}