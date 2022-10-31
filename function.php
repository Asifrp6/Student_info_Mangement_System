<?php 
$con=new mysqli("localhost","root","","pencilboxphp");
$action=$_POST['action'];
$action();

function insert(){
global $con;
                $student_name=$_POST["student_name"];
                $fathers_name=$_POST["fathers_name"];
                $mothers_name=$_POST["mothers_name"];
                $email=$_POST["email"];
                $status=$_POST["status"];
                $statements="INSERT INTO tbl_student_info (student_name,fathers_name,mothers_name,email,status)VALUES('$student_name','$fathers_name','$mothers_name','$email','$status')";
                $result=$con->query("$statements");
                if($result){
                    echo '<div class="alert alert-success">
                    <strong>Success</strong>
                  </div>';
                }
}
function show(){
    global $con;

    $obj = $con->query("SELECT * FROM tbl_student_info");

    if($obj->num_rows>0)
    {
        $tdata="";
        $sl=1;
        while($data=$obj->fetch_assoc()){
            if($data["status"]==1){
                $status="<button class=' btn btn-sm btn-success btn-active' value='".$data["student_id"]."'>Active</button>";
            }
            else{
                $status='<button class="btn btn-sm btn-warning btn-inactive"value="'.$data["student_id"].'">Inactive</button>';
            }
            $tdata .='<tr><td>'.$sl++.'</td>
            <td>'.$data["student_id"].'</td>
            <td>'.$data["student_name"].'</td>
            <td>'.$data["fathers_name"].'</td>
            <td>'.$data["mothers_name"].'</td>
            <td>'.$data["email"].'</td>
            <td>'.$status.'</td>
            <td><button  class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></td>
            <td><button data-bs-toggle="modal" data-bs-target="#forDelete" class="btn btn-danger btn-sm delete"value="'.$data["student_id"].'"><i class="fa fa-trash"></i></button></td>
            </tr>';
        }
        echo $tdata;
    }
    else{
         echo "<tr><td colspan='8' class='m-1 '>
         <div class='text-center border border-danger rounded-pill'>Data Not Found</div></td></tr>";
    }
}
  
function active(){
	global $con;
	$id = $_POST['id'];
	$result = $con->query("UPDATE tbl_student_info SET status = '2' WHERE student_id = '$id'");
}
function inactive(){
	global $con;
	$id = $_POST['id'];
	$result = $con->query("UPDATE tbl_student_info SET status = '1' WHERE student_id = '$id'");
}

function delete(){
	global $con;
	$id = $_POST['id'];
	$result = $con->query("DELETE FROM tbl_student_info  WHERE student_id = '$id'");
}
