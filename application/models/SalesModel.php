<?php



class SalesModel extends CI_Model

{
    public function get_data(){
		return $sql = $this->db->get('sales');  
	}		

    public function store_data($data){
        return $this->db->insert('sales',$data);
	}
  
    public function update_data($id,$data) {
		$this->db->where('id',$id);
		return $this->db->update('sales', $data);
	}

    public function delete_data($id) {
		$this->db->where('id',$id);
		return $this->db->delete('sales');
	}
    public function find_data($where) {
		$this->db->where('id',$where);
		return $this->db->get('sales');
	}
}