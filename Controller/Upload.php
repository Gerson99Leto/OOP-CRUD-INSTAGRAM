<?php 
include_once("Database.php");
class Upload extends Database
{
	protected $table = 'up';
	public function save()
	{
		if(isset($_POST['submit'])){
			$data = [
				'gambar' => $_FILES['file']['name'],
				'tmp'    => $_FILES['file']['tmp_name'],
				'date'   => date('Y-m-d H:i:s')
			];
			move_uploaded_file($data['tmp'],'images/'. $data['gambar']);
			parent::insert($data['gambar'], $data['date']);
		}
	}
}
?>