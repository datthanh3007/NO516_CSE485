<?php
   // used to get mysql database connection
    class Database{
 
    //specify your own database credentials
    private $host = "localhost";
    private $db_name = "login_php";
    private $username = "root";
    private $password = "";
    public $conn;
    
   // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>

<?php
    // $ServerName = "localhost";
    // $UserName = "root";
    // $PassWord = "";
    // $dbName = "login_php";

    // // Create connection
    // $conn = new mysqli($ServerName, $UserName, $PassWord, $dbName);
    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // mysqli_query ($conn, ' set names UTF8'); 
?>


