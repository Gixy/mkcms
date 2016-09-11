<?php

    require_once('inc/dbconfig.php');

    class User {

        private $conn;

        public function __construct()
    	{
    		$database = new Database();
    		$db = $database->dbConnection();
    		$this->conn = $db;
        }

        public function attemptRegister($username,$password,$email)
    	{
    		try
    		{
    			$new_password = password_hash($password, PASSWORD_DEFAULT);

    			$query = $this->conn->prepare("INSERT INTO users(username,password,email) VALUES(:uname, :upass, :umail)");

    			$query->bindparam(":uname", $username);
                $query->bindparam(":upass", $new_password);
    			$query->bindparam(":umail", $email);

                $query->execute();

    			return $query;
    		}
    		catch(PDOException $e)
    		{
    			echo $e->getMessage();
    		}
    	}

        public function attemptLogin($username, $password)
        {
            $query = $this->conn->prepare("SELECT * FROM users WHERE username=:uname OR password=:upass LIMIT 1");
            $query->execute(array(':uname'=>$username, ':upass'=>$password));
            $userRow = $query->fetch(PDO::FETCH_ASSOC);

            if( $query->rowCount() == 1 )
            {
                if(password_verify($password, $userRow['password']))
				{
                        $_SESSION['user_session'] = $userRow['user_id'];
                        return true;
				}
				else
				{
					return false;
				}
            }
        }

        public function is_loggedin()
    	{
    		if(isset($_SESSION['user_session']))
    		{
    			return true;
    		}
    	}

        public function attemptLogout()
    	{
    		session_destroy();
    		unset($_SESSION['user_session']);
    		return true;
    	}

        public function runQuery($sql){
            $query = $this->conn->prepare($sql);
    		return $query;
        }

        public function redirect($url)
    	{
    		header("Location: $url");
    	}

        public function addPost($title, $content, $file){

            try
            {
                $current_date = date("Y-m-d H:i:s");
                $query = $this->conn->prepare("INSERT INTO posts(post_id, post_title, post_content, post_image_path, post_date) VALUES(NULL, :title, :content, :file, :current)");
                $query->bindparam(":title", $title);
                $query->bindparam(":content", $content);
                $query->bindparam(":file", $file);
                $query->bindparam(":current", $current_date);
                $query->execute();
            }
            catch (Exception $e)
            {
                echo $e->getMessage();
            }
        }

        public function generateNames($amount)
        {
            try
            {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randstring = '';
                for ($i = 0; $i < 10; $i++) {
                    $randstring = $characters[rand(0, strlen($characters))];
                }
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }
        }

        public function getPosts(){

            try
            {
                $query = $this->runQuery("SELECT * FROM posts LIMIT 8");
                $results = $query->fetch(PDO::FETCH_ASSOC);
                print_r($results);
            }
            catch (Exception $e)
            {
                echo $e->getMessage();
            }
        }
    }
