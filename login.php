<?php 
include("dbconnect.php");
session_start();

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $res="Connected"; 
    }
catch(PDOException $e)
    {
    $res="Connection failed: " . $e->getMessage();
    }
if($res=="Connected"){


    if (isset($_POST["uid"]) && isset($_POST["pcode"]) && isset($_POST["logintype"])) {

        $userid = $_POST["uid"];
    
        $password = $_POST["pcode"];
        
		$ltype = $_POST["logintype"];
		
        if($userid=="admin" && $password=="admin" && $logintype=="Admin"){
            echo "000";
        }
        
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = :user");
        $stmt->bindValue(":user",$userid, PDO::PARAM_STR);
        $ver=$stmt->execute();
        if($ver){
            $stmt->bindColumn("password", $rcode);
            $stmt->fetch();
            if($password==$rcode){
                
                echo "Success";
            }
            else
            
                echo "Wrong Credentials";

        }
        else
            echo "USER DOES NOT EXIST";
        $conn==null;
    }

    else
    
        echo "Request Error!";
}
else
    echo "SERVER ERROR!CAN'T CONNECT!";
?>