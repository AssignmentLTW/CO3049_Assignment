<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "Newdb",
        $tablename = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT DEFAULT NULL,
                             product_image VARCHAR (100) DEFAULT NULL,
                             detail varchar(300) NOT NULL
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }
    }

    // get product from the producttb
    public function getData(){
        $sql = "SELECT * FROM producttb";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    // get product from the producttb (laptop best seller)
    public function getDatabs(){
        $sql = "SELECT * FROM producttb WHERE id IN(1,2,3,4,5,6,7,8)";
    
        $result = mysqli_query($this->con, $sql);
    
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    // get product from the producttb (laptop gaming)
    public function getDatagm(){
        $sql = "SELECT * FROM producttb WHERE id IN(9,10,11,12,13,14,15,16)";
    
        $result = mysqli_query($this->con, $sql);
    
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    // get product from the producttb (laptop ultrabook)
    public function getDataul(){
        $sql = "SELECT * FROM producttb WHERE id IN(17,18,19,20,21,22,23,24)";
    
        $result = mysqli_query($this->con, $sql);
    
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}






