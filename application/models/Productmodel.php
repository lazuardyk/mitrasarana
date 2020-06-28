<?php

class Productmodel extends CI_Model{
 
    function getProduct(){
        $result = $this->db->get('products')->result();
        return $result;
    }

    function getCategory(){
        $result = $this->db->get('product_categories')->result();
        return $result;
    }
   
}

?>