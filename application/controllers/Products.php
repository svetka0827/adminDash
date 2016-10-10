<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product');
	}

	public function load_data_display()
	{
		$this->load->view('data_display');
	}


	
	public function index()
	{
		$jan_sales=$this->Product->jan_sales();
		$jan_sales_1=0;
		$jan_sales_2=0;
		$jan_sales_3=0;
		foreach($jan_sales as $jan_sale)
		{
			if($jan_sale['store_id']==1)
			{
				$jan_sales_1+=$jan_sale['order_total'];
			}
			if($jan_sale['store_id']==2)
			{
				$jan_sales_2+=$jan_sale['order_total'];
			}
			if($jan_sale['store_id']==3)
			{
				$jan_sales_3+=$jan_sale['order_total'];
			}
		}


 		$categories=$this->Product->all_categories();
 		$colors=$this->Product->all_colors();
 		$genders=$this->Product->all_genders();
 		$sizes=$this->Product->all_sizes();
 		$styles=$this->Product->all_styles();
 		$stores=$this->Product->all_stores();
 		$wholesellers=$this->Product->all_wholesellers();
 		$products=$this->Product->all_inventory();


 		$data=array(
 				'categories'=>$categories,
 				'colors'=>$colors,
 				'genders'=>$genders,
 				'sizes'=>$sizes,
 				'styles'=>$styles,
 				'stores'=>$stores,
 				'wholesellers'=>$wholesellers,
 				'products'=>$products,
 				'jan_sales_3'=>$jan_sales_3
 				);

 		$this->load->view('index',$data,$jan_sales_3,$jan_sales_2);
 	}


 	public function add_inventory()
 	{
 	
 		// add into product table 
 		$product=array(
 				'product_name'=>$post['product_name'],
 				'unit_price'=>$post['price'],
 				'wholeseller_id'=>$post['wholeseller']);
 		$product_id=$this->Product->add_product($product);


 		// add into inventory table 
 		 $inventory=array(
 				'product_qty'=>$post['quantity'],
 				'product_id'=>$product_id,
 				'product_category_id'=>$post['category'],
 				'product_sizes_id'=>$post['size'],
 				'product_color_id'=>$post['color'],
 				'product_gender_id'=>$post['gender']
 						);
 		$this->Product->add_inventory($inventory);


 		// // add into product_styles table

 		// $styles=$post['style'];
 
 		// foreach($styles as $style){

	 	// 	 $product_styles=array(
	 	// 			'style_id'=>$style['id'],
	 	// 			'product_id'=>$product_id
	 	// 					);
	 	// 	$this->Product->add_product_styles($product_styles);

 		
 	}


 	public function monthly_sales($query_criteria)
 	{

 		//var_dump($query_criteria); die();

 		// click on january 2016 
 		// pass clicked month value to this method from index page
 		// pull query where january 2016 sales
 		// save query 
 		// pass query result and partial / sales_report.html back to index page
 	}


 	 public function ytd_sales()
 	 {
 		// click on year to date sales
 		// pull query for the whole sales
 		// save query 
 		// pass query result and partial / sales_report.html back to index page
 	}


 	public function store_inventory($store_id)
 	{

 		$products=$this->Product->all_inventory($store_id);
 		$data=array(
 				'products'=>$products
 				);

 		$this->load->view('export', $data);
 	}

 	public function all_inventory()
 	{
 		$products=$this->Product->all_inventory();
 		$data=array(
 				'products'=>$products
 				);

 		$this->load->view('export', $data);
 	}



}	
	
	







