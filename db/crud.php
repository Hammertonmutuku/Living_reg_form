<?php
 class crud{
     // private database object
     private $db;

     //constructor to initialize private variable to the dtabase connection
     function __construct($conn){
         $this->db = $conn;
     }
     //function to insert records
     public function insert($fname, $lname,$dob,$email,$contact,$contact2, $specialty, $other){
         try {
             $sql = "INSERT INTO registration(firstname,lastname,dateOfBirth,email,contact,contact2,specialty,other) values(:fname,:lname,:dob,:email,:contact,:contact2,:specialty,:other)";
             $stmt = $this->db->prepare($sql);

             $stmt->bindparam(':fname',$fname); 
             $stmt->bindparam(':lname',$lname); 
             $stmt->bindparam(':dob',$dob);
             $stmt->bindparam(':email',$email); 
             $stmt->bindparam(':contact',$contact); 
             $stmt->bindparam(':contact2',$contact2);
             $stmt->bindparam(':specialty',$specialty);
             $stmt->bindparam(':other',$other);  
              
            
             $stmt->execute();
             return true;
         } catch (PDOExecption $e) {
             echo $e->getMessage();
             return false;
         }
     }
    public function editMembers($id,$fname,$lname,$dob,$email,$contact,$contact2,$specialty,$other){
        try {
            $sql = "UPDATE `registration` SET `firstname`=:fname,`lastname`=:lname,`dateOfBirth`=:dob,`email`=:email,`contact`=:contact,`contact2`=:contact2,`specialty`=:specialty,`other`=:other WHERE ID = :id ";

            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':fname',$fname); 
            $stmt->bindparam(':lname',$lname); 
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email); 
            $stmt->bindparam(':contact',$contact); 
            $stmt->bindparam(':contact2',$contact2);
            $stmt->bindparam(':specialty',$specialty);
            $stmt->bindparam(':other',$other); 
            
            $stmt->execute();
            return true;
        } catch (PDOExeceprion $e) {
            //throw $th;
            echo $e->getMessage();
            return false;
        }
       
    }
     public function viewMembersDetails($id){
        $sql = "select * from registration where ID = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        $results = $stmt->fetch();
        return $results;
     }
     public function viewMembers(){
        $sql = "SELECT * FROM `registration`";
        $results =  $this->db->query($sql);
        return $results;
     }
    
 }

?>