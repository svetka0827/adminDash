<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model 
{

	public function all_categories(){
		$query="SELECT * FROM categories";
		return $this->db->query($query)->result_array();
 	}
 	public function all_colors(){
		$query="SELECT * FROM colors";
		return $this->db->query($query)->result_array();
 	}

 	public function all_genders(){
		$query="SELECT * FROM genders";
		return $this->db->query($query)->result_array();
 	}

  	public function all_sizes(){
		$query="SELECT * FROM sizes";
		return $this->db->query($query)->result_array();
 	}

 	public function all_styles(){
		$query="SELECT * FROM styles";
		return $this->db->query($query)->result_array();
 	}

 	public function all_stores(){
		$query="SELECT * FROM stores";
		return $this->db->query($query)->result_array();
 	}

  	public function all_wholesellers(){
		$query="SELECT * FROM wholesellers";
		return $this->db->query($query)->result_array();
 	}

 	public function add_product($product){
  		$query="INSERT INTO products
 					(product_name,
 					 unit_price,
 					 wholeseller_id)
 					VALUES(?,?,?)";

 		$values=array(
 				$product['product_name'],
 				$product['unit_price'],
 				$product['wholeseller_id']
 				);

 		$this->db->query($query,$values);
 		$product_id=$this->db->insert_id();
 		return $product_id;
 	}

  	public function add_inventory($inventory){
  		$query="INSERT INTO inventory
 					(product_qty,
 					 product_id,
 					 store_id)
 					VALUES(?,?,?,?,?,?)";

 		$values=array(
 				$inventory['product_qty'],
 				$inventory['product_id'],
 				$inventory['product_category_id'],
 				$inventory['product_sizes_id'],
 				$inventory['product_color_id'],
 				$inventory['product_gender_id']
 				);

 		$this->db->query($query,$values);
 	}


  	public function add_product_styles($product_styles){
  		$query="INSERT INTO product_styles
 					(style_id,
 					 product_id)
 					VALUES(?,?)";

 		$values=array(
 				$product_styles['style_id'],
 				$product_styles['product_id']
 				);

 		$this->db->query($query,$values);
 	}



 	public function store_inventory($store_id){
 		$query="Select products.product_name, colors.color_name, inventory.product_qty, stores.store_name,sizes.size_attr,
			categories.category_name, genders.gender_name
			FROM stores 
			JOIN inventory ON stores.id=inventory.store_id
			JOIN products ON products.id=inventory.product_id
			JOIN colors ON products.product_color_id=colors.id 
			JOIN sizes ON products.product_size_id=sizes.id
			JOIN genders ON products.product_gender_id=genders.id
			JOIN categories ON products.product_category_id=categories.id
			WHERE stores.id=". $store_id;

		return $this->db->query($query)->result_array();
 	}


 	public function all_inventory()
 	{
 		$query="Select products.product_name, colors.color_name, inventory.product_qty, stores.store_name,sizes.size_attr,
			categories.category_name, genders.gender_name
			FROM stores 
			JOIN inventory ON stores.id=inventory.store_id
			JOIN products ON products.id=inventory.product_id
			JOIN colors ON products.product_color_id=colors.id 
			JOIN sizes ON products.product_size_id=sizes.id
			JOIN genders ON products.product_gender_id=genders.id
			JOIN categories ON products.product_category_id=categories.id";
		return $this->db->query($query)->result_array();
 	}


 	public function jan_sales(){
 		$query="SELECT * FROM orders
				WHERE created_at BETWEEN '2016-01-01' AND '2016-01-31'";
		return $this->db->query($query)->result_array();
 	}

}