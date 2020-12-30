<?php
 class crud{
     // private database object
     private $db;

     //constructor to initialize private variable to the dtabase connection
     function __construct($conn){
         $this->db = $conn;
     }
     //function to insert records
     public function insert($fname, $lname,$email,$contact,$contact2, $dob,$specialty, $other, $type2){
         try {
             $sql = "INSERT INTO Members(firstName,lastName,Email,Contact,Contact2,DateOfBirth,Specialty,Other,TypeOfMember) values(:fname,:lname,:email,:contact,:contact2,:dob,:specialty,:other,:type2)";
             $stmt = $this->db->prepare($sql);

             $stmt->bindparam(':fname',$fname); 
             $stmt->bindparam(':lname',$lname); 
             $stmt->bindparam(':email',$email); 
             $stmt->bindparam(':contact',$contact); 
             $stmt->bindparam(':contact2',$contact2);
             $stmt->bindparam(':dob',$dob);
             $stmt->bindparam(':specialty',$specialty);
             $stmt->bindparam(':other',$other);  
             $stmt->bindparam(':type2',$type2);  
              
            
             $stmt->execute();
             return true;
         } catch (PDOExecption $e) {
             echo $e->getMessage();
             return false;
         }
     }
    public function editMembers($id,$fname,$lname,$dob,$email,$contact,$contact2,$specialty,$other,$type2){
        try {
            $sql = "UPDATE `Members` SET `firstname`=:fname,`lastname`=:lname,`dateOfBirth`=:dob,`email`=:email,`contact`=:contact,`contact2`=:contact2,`specialty`=:specialty,`other`=:other,`TypeOfMember`=:type2 WHERE MemberId = :id ";

            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':fname',$fname); 
            $stmt->bindparam(':lname',$lname); 
            $stmt->bindparam(':email',$email); 
            $stmt->bindparam(':contact',$contact); 
            $stmt->bindparam(':contact2',$contact2);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':specialty',$specialty);
            $stmt->bindparam(':other',$other);
            $stmt->bindparam(':type2',$type2);   
            
            $stmt->execute();
            return true;
        } catch (PDOExeceprion $e) {
            //throw $th;
            echo $e->getMessage();
            return false;
        }
       
    }
    Public function deleteMember($id){
        try {
            //code...
            $sql = "delete from Members where MemberId = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            return true;
        } catch (PDOExeceprion $e) {
            //throw $th;
            echo $e->getMessage();
            return false;
        }
       
    }
     public function viewMembersDetails($id){
         try {
             //code...
             $sql = "select * from Members where MemberId = :id";
             $stmt = $this->db->prepare($sql);
             $stmt->bindparam(':id',$id);
             $stmt->execute();
             $results = $stmt->fetch();
             return $results;
         } catch (PDOExeption $e) {
             //throw $th;
             echo $e->getMessage();
            return false;
         }
      
     }
     public function viewMembers(){
         try {
             //code...
             $sql = "SELECT * FROM `Members`";
             $results =  $this->db->query($sql);
             return $results;
         } catch (PDOExeprion $e) {
             //throw $th;
             echo $e->getMessage();
             return false;
         }
        }
    public function memberType(){
        try {
            //code...
            $sql = "SELECT * FROM `MemberType`";
            $results =  $this->db->query($sql);
            return $results;
        } catch (PDOExeprion $e) {
            //throw $th;
            echo $e->getMessage();
            return false;
        }  
    }
    
 }

?>