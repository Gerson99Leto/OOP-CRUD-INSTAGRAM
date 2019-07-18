<?php 
class Database 
{
	private $server = 'localhost';
	private $user	= 'root';
	private $pass	= '';
	private $db     = 'oopig';

	public $connection;
	public function __construct(){
		$this->connection = new mysqli($this->server, $this->user, $this->pass, $this->db);
		
		if ($this->connection->connect_error) die('Database error -> ' . $this->connection->connect_error);
		
	}
	public function ret_obj(){
		return $this->connection;
	}

	public function insert($data, $date)
	{
		$query = mysqli_query($this->connection, "INSERT INTO $this->table VALUES ('','$data','$date')");
		$result = ($query);
	}
	public function getAll()
	{
		$query = mysqli_query($this->connection, "SELECT * FROM $this->table" );
		while ($row = mysqli_fetch_array($query)) 
			 $data[] = $row;

		return $data;
	}
}
?>