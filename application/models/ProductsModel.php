<?php
    class ProductsModel extends CI_Model{
         
        public function get_products($search=false){
            $query = $this->db->get("products");
            return $query->result();
        }       
 
        public function find_products($search=false){
            if($search){
              $this->db->like('title', $search.' %');
              $this->db->or_like('description', $search); 
              $query = $this->db->get("products");
              return $query->result();
            }
        }

        
        public function insert_product($data)
        {
            return $this->db->insert('products', $data);
        }
  
  
        public function update_product($id,$data) 
        {
            if($id==0){
                return $this->db->insert('products',$data);
            }else{
                $this->db->where('id',$id);
                return $this->db->update('products',$data);
            }        
        }

    }
    ?>