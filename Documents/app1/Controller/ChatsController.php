<?php
class ChatsController extends AppController
{
	public function index()
	{
		//$this->layout = 'defaultlayout';
		session_start();
		// Check, if user is already login, then jump to secured page
		if (isset($_SESSION['username'])) {
		$this->redirect(array('controller' => 'chats', 'action' => 'profile'));
		}
	}
	
	public function signup()
	{
	}
	
	public function profile()
	{
	}
	
	public function login()
	{
		//$this->layout = 'defaultlayout';
		echo "login";
		session_start(); // Starting Session
		$error=''; // Variable To Store Error Message
		if (isset($_POST['submit'])) 
		{
			echo "submitted";
			if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				$error = "Username or Password is invalid";
				echo $error;
			}
			else
			{
				
				// Define $username and $password
				$username=$_POST['username'];
				$password=$_POST['password'];
				echo $username;
				//echo $password;
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				//$connection = mysql_connect("localhost", "root", "1234");
				// To protect MySQL injection for Security purpose
				/*$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysql_real_escape_string($username);
				$password = mysql_real_escape_string($password);
				// Selecting Database
				echo $username;
				echo $password;
				//$db = mysql_select_db("company", $connection);
				// SQL query to fetch information of registerd users and finds user match.
				//echo $username;*/
				$query = $this->Chat->query("select count(*) from chats where password='$password' AND uname='$username';");	
				//debug($query);
				//echo $username;
				//echo $query
				//$rows = mysql_num_rows($query);
				if ($query[0][0]['count(*)'] == 1) 
				{
					$_SESSION['login_user']=$username;
					//echo "success"; // Initializing Session
					$this->redirect(array('controller' => 'chats', 'action' => 'profile')); // Redirecting To Other Page
				} 
				else 
				{
					$error = "Username or Password is invalid";
					echo $error;
				}
			}
			//mysql_close($connection); // Closing Connection
		}
	}
	
	public function logout()
	{
		$this->layout = 'defaultlayout';
		session_start();
		if(session_destroy()) // Destroying All Sessions
		{
		$this->redirect(array('controller' => 'chats', 'action' => 'index'));  // Redirecting To Home Page
		}
	}
	
	public function session()
	{
		//$this->layout = 'defaultlayout';
		//$connection = mysql_connect("localhost", "root", "1234");
		// Selecting Database
		//$db = mysql_select_db("company", $connection);
		session_start();// Starting Session
		// Storing Session
		$user_check=$_SESSION['uname'];
		// SQL Query To Fetch Complete Information Of User
		$ses_sql=$this->Chat->query("select uname from users where uname='$user_check'");
		$row = mysql_fetch_assoc($ses_sql);
		$login_session =$row['uname'];
		if(!isset($login_session))
		{
			//mysql_close($connection); // Closing Connection
			$this->redirect(array('controller' => 'chats', 'action' => 'index'));  // Redirecting To Home Page
		}
	}
	
	
}
