<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Team_model extends CI_Model 
{
    // deklarasi nama tabel
    private $table ='data_pemain';
    public function select()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }                        
    
    public function save()
    {
     $data = array(
          "waktu" => $this->input->post('waktu'), 
          "nama_tim" => $this->input->post('nama_tim'),
          "jumlah_pemain" =>$this->input->post('jumlah_pemain')
     );   
     return  $this->db->insert($this->table, $data);
    }    

    public function show_data()
    {
        $id = $this->input->get('id');
        $this->db->from($this->table)->where('id',$id);
        $query = $this->db->get();
        return $query->result();

    }

    public function update()
    {
     $data = array(
        "waktu" => $this->input->post('waktu'), 
        "nama_tim" => $this->input->post('nama_tim'),
        "jumlah_pemain" =>$this->input->post('jumlah_pemain')
     );   
     $this->db->where('id', $this->input->post('id'));
    return $this->db->update($this->table,$data);
}
public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}


/* End of file Team_model.php and path \application\models\Team_model.php */
