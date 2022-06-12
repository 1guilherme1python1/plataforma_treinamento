<?php
class Anuncios extends Model{
    public function getQuatidade(){
        $sql = $this->db->query('SELECT COUNT(*) as c FROM anuncios');
        if($sql->rowCount()>0){
            $sql = $sql->fetch();
            return $sql['c'];
        } else {
            return 0;
        }
    }
}