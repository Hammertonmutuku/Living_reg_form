<?php
      class user{
        // private database object
        private $db;
   
        //constructor to initialize private variable to the dtabase connection
        function __construct($conn){
            $this->db = $conn;
        }
       
        public function insertUser($username,$password){
            try {
                $result =$this->getUserbyUsername($username);
                if($result['num'] > 0){
                    return false;
                }else{
                        $new_password = md5($password.$username);
                        $sql = "INSERT INTO Users (username,password) values (:username,:password)";
                        $stmt = $this->db->prepare($sql);
        
                        $stmt->bindparam(':username',$username); 
                        $stmt->bindparam(':password',$new_password); 
                    
                        
                    
                        $stmt->execute();
                        return true;
                }
             
            } catch (PDOExecption $e) {
                echo $e->getMessage();
                return false;
            }
        }
        
        public function getUser($username,$password){
            try {
                //code...
                $sql = "select * from Users where username = :username  AND password = :password";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username',$username);
                $stmt->bindparam(':password',$password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOExeption $e) {
                //throw $th;
                echo $e->getMessage();
               return false;
            }
        }
        public function getUserbyUsername($username){
            try{
                $sql = "select count(*) as num from Users where username = :username";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam('username', $username);

                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

    }
?>