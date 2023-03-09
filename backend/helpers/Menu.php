<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'user', 
			'label' => 'User', 
			'icon' => '<i class="fa fa-male "></i>'
		),
		
		array(
			'path' => 'tbl_opset', 
			'label' => 'Opset', 
			'icon' => '<i class="fa fa-database "></i>'
		),
		
		array(
			'path' => 'pengajuan', 
			'label' => 'Pengajuan', 
			'icon' => '<i class="fa fa-clone "></i>'
		)
	);
		
	
	
			public static $status = array(
		array(
			"value" => "proses", 
			"label" => "Proses", 
		),
		array(
			"value" => "terima", 
			"label" => "Terima", 
		),
		array(
			"value" => "tolak", 
			"label" => "Tolak", 
		),);
		
			public static $kategori_aset = array(
		array(
			"value" => "bangunan", 
			"label" => "Bangunan", 
		),
		array(
			"value" => "tanah", 
			"label" => "Tanah", 
		),);
		
			public static $jenis_kelamin = array(
		array(
			"value" => "laki-laki", 
			"label" => "Laki-Laki", 
		),
		array(
			"value" => "perempuan", 
			"label" => "Perempuan", 
		),);
		
			public static $role = array(
		array(
			"value" => "Admin", 
			"label" => "Admin", 
		),
		array(
			"value" => "User", 
			"label" => "User", 
		),);
		
}