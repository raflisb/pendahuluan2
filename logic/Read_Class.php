<?php 
	class read
	{
		
		public $host = 'localhost'; 
		public $username = 'root';
		public $pass ='';
		public $db_name ='pendahuluan2'; 
		public $connect;


		public function __construct () 
		{
			$this->connect = new mysqli ($this->host, $this->username, $this->pass, $this->db_name);
		}
	
		public function AuthLogin () 
		{
			session_start();
			$username = $_POST['username'];
			$password = $_POST['password']; 

			$query = "SELECT * from user where username = '$username' and password ='$password'";
			$doQuery = $this->connect->query($query); 

			$cek = mysqli_num_rows($doQuery); 

			if ($cek>0)
			{
				$_SESSION['username'] = $username;
				$_SESSION['stats'] = "true";
				header("location:../admin/");
			}
			else {
				header ("location:../");
			}


		}	
			
	}