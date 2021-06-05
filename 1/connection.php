<?php

Class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost:3309;dbname=reservas-hotel",
						"root",
						"usbw");

		$link->exec("set names utf8");

		return $link;

	}


}