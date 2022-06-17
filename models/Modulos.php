<?php
class Modulos extends Model{
    public function getModulos($id_curso){
        $array = array();
        $sql = $this->db->query("SELECT * FROM modulos WHERE id_curso='$id_curso'");
        
        if($sql->rowCount()>0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);

            $aulas = new Aulas();

            foreach($array as $mChave => $mDados){
               $array[$mChave]['aulas'] = $aulas->getAulasDoModulo($mDados['id']);
            }
        }
        return $array;
    }
}