<?php
class Bmipasien_model extends CI_Model {
    public $id, $tanggal, $pasien, $bmi;

    public function getAll(){
        $query = $this->db->get('bmi_pasien');
        return $query;
    }

    public function findById($id){
        $query = $this->db->get_where('bmi_pasien',['id'=>$id]);
        return $query->row();
    }
    
}

?>