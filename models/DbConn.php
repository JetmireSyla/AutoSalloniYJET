<?php 
class DBconnection{

	public function getConnection(){

		try{
			$connection = new PDO("mysql:host=localhost;dbname=autosalloni_yjet", "root" , "");   
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
			echo $e->getMessage();
            return null;
		}
		return $connection;
	}
}
