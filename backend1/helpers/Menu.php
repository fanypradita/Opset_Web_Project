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
			'icon' => '<i class="fa fa-child "></i>'
		),
		
		array(
			'path' => 'opset', 
			'label' => 'Opset', 
			'icon' => '<i class="fa fa-files-o "></i>'
		),
		
		array(
			'path' => 'pengajuan/index', 
			'label' => 'Pengajuan', 
			'icon' => '<i class="fa fa-list-alt "></i>'
		)
	);
		
	
	
			public static $jenis_kelamin = array(
		array(
			"value" => "L", 
			"label" => "Laki-laki", 
		),
		array(
			"value" => "p", 
			"label" => "Perempuan", 
		),);
		
			public static $role = array(
		array(
			"value" => "User", 
			"label" => "User", 
		),
		array(
			"value" => "Admin", 
			"label" => "Admin", 
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
		
			public static $status = array(
		array(
			"value" => "Proses", 
			"label" => "Proses", 
		),
		array(
			"value" => "Terima", 
			"label" => "Terima", 
		),
		array(
			"value" => "Tolak", 
			"label" => "Tolak", 
		),);
		
}