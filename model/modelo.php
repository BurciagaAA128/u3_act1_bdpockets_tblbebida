<?php
class Bebida
{
	private $Bebida;
	private $dbh;

	public function __construct()
	{
		$this->Bebida = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bd_pockets', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_Bebidas()
	{
		self::set_names();
		$sql="select * from tbl_bebida";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->Bebida[]=$res;
		}
		return $this->Bebida;
		$this->dbh=null;
	}
}
?>