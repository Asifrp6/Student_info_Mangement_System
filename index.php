<!DOCTYPE html>
<html>
<head>
	<title>STUDENT iNFO</title>
  <!-- bootstrap css file -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- fonwasome css -->
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
</head>
<section class="container">
	<div class="d-flex justify-content-center m-3">

          <div class=" h-75 p-4 border rounded border-success">
            <div class="msg">
            </div>
            <div class="form-group mb-3 ">
              <div class="p-3 mb-3 rounded bg-info">
              <h4 class="text-center ">Add Student Info</h4>
              </div>
              
              <label for="student_name" class="form-label" required>Student Name</label>
              <input 
              type="text" 
              class="form-control edit_student_name" 
              id="student_name"
              name="student_name"
              >
            </div>

            <div class="form-group mb-3">
              <label for="fathers_name" class="form-label">Father's Name</label>
              <input 
              type="text" 
              class="form-control edit_fathers_name" 
              id="fathers_name"
              name="fathers_name"
              >
            </div>

            <div class="form-group mb-3">
              <label for="mothers_name" class="form-label">Mother's Name</label>
              <input 
              type="text" 
              class="form-control edit_mothers_name" 
              id="mothers_name"
              name="mothers_name"
              >
            </div>

            <div class="form-group mb-3">
              <label for="email" class="form-label">Email</label>
              <input 
              type="email" 
              class="form-control edit_email" 
              id="email"
              name="email"
              >
            </div>

            <div  class="form-group mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" class="form-select edit_status" name="status">
                  <option value="">------Status-----</option>
                  <option value="1">Active</option>
                  <option value="2">Deactivate</option>
                </select>
              </div>

          <button name="send"class="send btn btn-outline-success">Save</button>
          
        </div>
                <div class="ms-2 p-4 border rounded border-success">
                  <div class="p-3 rounded bg-info">
                  <h4 class="text-center">Student Info</h4>
                  </div>
                  <table class="table table-success table-striped">
                    <thead>
                      <tr>
                        <th>SL. No.</th>
                        <th>Student Id</th>
                        <th>Student Name</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody class="tdata">
                    </tbody>
                  </table>
                  <button name="add" data-bs-toggle="modal" data-bs-target="#forInsert" class="addNew btn my-2 btn-outline-info">Add New Student</button>
                  </div>
        </div>
                <!-- For Delete Modal -->
<div class="modal fade" id="forDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure want to Delete this item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="MbtnDelete btn btn-danger">Confirm</button>
      </div>
    </div>
  </div>
</div>


<!-- For Insert Modal -->
<div class="modal fade" id="forInsert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

       	  <div class="form-group m-4">
       	  	<input type="text" id="MstudentName" class="form-control" placeholder="Enter Student Name">
       	  </div>

       	  <div class="form-group m-4">
       	  	<input type="text" id="MfName" class="form-control" placeholder="Enter Father's Name">
       	  </div>

       	  <div class="form-group m-4">
       	  	<input type="text" id="MmName" class="form-control" placeholder="Enter Mother's Name">
       	  </div>

       	  <div class="form-group m-4">
       	  	<input type="email" id="Memail" class="form-control" placeholder="Enter Email Address">
       	  </div>

       	  <div class="form-group m-4">
       	  	<select id="Mstatus" class="form-control">
       	  		<option value="">----- Select Status-----</option>
       	  		<option value="1">Active</option>
       	  		<option value="2">Inactive</option>
       	  	</select>
       	  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="MaddNew btn btn-success">Add</button>
      </div>
    </div>
  </div>
</div>
</section>
<!-- jQuery js file -->
<script src="js/jquery-3.6.1.min.js"></script>

<!-- local js file -->
<script src="js/app.js"></script>

<!-- bootstrap js file -->
<script src="js/bootstrap.min.js"></script>

<!-- fontwasome js file -->
<script type="text/javascript"src="js/all.min.js"></script>
</body>
</html>