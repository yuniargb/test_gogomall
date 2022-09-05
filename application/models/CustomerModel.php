<?php



class CustomerModel extends CI_Model

{
    public function get_data(){
        $this->db->join('sales as s','s.id=c.id_sales');
        $this->db->select('c.*');
		return $sql = $this->db->get('customer as c');  
	}
    public function get_data_sales() {
		$this->db->join('sales as s','s.id=c.id_sales');
		$this->db->select('c.id, c.nama as nama_customer, c.no_telpon, s.nama as nama_sales');
		return $this->db->get('customer as c');
	}		

    public function store_data($data){
        return $this->db->insert('customer',$data);
	}
  
    public function update_data($id,$data) {
		$this->db->where('id',$id);
		return $this->db->update('customer', $data);
	}

    public function delete_data($id) {
		$this->db->where('id',$id);
		return $this->db->delete('customer');
	}
    public function find_data($where) {
		$this->db->where('id',$where);
		return $this->db->get('customer');
	}
}