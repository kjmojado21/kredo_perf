<?php 

include 'connection.php';

class Admin extends Connection{
    
// inserting data to teachers table (adding new teachers)

function add_teacher($fname,$lname,$status){
    $connection = $this->conn;

    $sql = "INSERT INTO teachers(teacher_fname,teacher_lname,status)VALUES('$fname','$lname','$status')";
    $result = $connection->query($sql);

    if($result == false){
        die('error adding teacher'.$connection->connect_error);
    }else{
        header('location:');
    }
}
// displaying all teacher list (FOR SELECT TAG)
function displayTeachers(){
    $connection = $this->conn;
    $sql = "SELECT * FROM teachers";
    $result = $connection->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }
        return $row;
    }else{
        return false;
    }
}

// displaying all attendance of teachers
function displayTeacherAttendance(){
    $connection = $this->conn;
    $sql = "SELECT * FROM teachers INNER JOIN attendance ON teachers.teacher_id = attendance.teacher_id";
    $result = $connection->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }
        return $row;
    }else{
        return false;
    }
}

// setting up teacher attendance
function setTeacherAttendance($date,$remark,$id){
    $connection = $this->conn;
    $sql = "INSERT INTO attendance(date,remark,teacher_id)VALUES('$date','$remark','$id')";
    $result = $connection->query($sql);

    if($result == false){
        die($connection->connect_error);

    }else{
        header('location:');
    }
}

function uploadTeacherPhoto($name){
    

}
function getCourses(){
    $connection = $this->conn;
    $sql = "";
}

}










?>