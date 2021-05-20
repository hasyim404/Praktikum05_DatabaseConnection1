<?php
class Pasien_model extends CI_Model {
    public $id, $nama, $kode, $gender, $tmp_lahir, $tgl_lahir;

    public function jenis_kelamin() {
        return $this->gender=="L" ? "Laki-laki" : "Perempuan";
    }

    public function getAll(){
        // select * from pasien
        $query = $this->db->get('pasien');
        return $query;
    }

    public function findById($id){
        // select * from pasien where id=$id
        $query = $this->db->get_where('pasien',['id'=>$id]);
        return $query->row();
    }
}

?>