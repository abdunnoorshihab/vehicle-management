<?php require('header.php'); ?>
<?php require('layouts/admin_menu.php'); ?>

<style>
  
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 250px; 
        height: 100vh;
        padding-top: 20px; 
    }

    
    .content {
        margin-left: 250px; 
        padding: 20px;
    }

    .form-control:focus, .form-select:focus, textarea:focus {
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
        border-color: #80bdff;
        transition: box-shadow 0.3s ease-in-out, border-color 0.3s ease-in-out;
    }

    .form-floating > label {
        transition: all 0.25s ease-in-out;
    }
</style>

<div class="container-fluid">
  <div class="row">
    
    <div class="sidebar">
      
      <?php require('layouts/admin_menu.php'); ?>
    </div>

    <div class="content">
      <div class="card shadow-sm rounded-4 my-5 p-4">
        <h2 class="mb-5 border-bottom pb-3 text-primary text-center">New Employee Information</h2>
        
        <form class="row g-3"> 

          <div class="col-md-6 py-3 form-floating">
            <input type="text" class="form-control" id="employeeName" placeholder="Employee Name" required>
            <label for="employeeName">Employee Name<span class="text-danger">*</span></label>
          </div>

          <div class="col-md-6 py-3 form-floating">
            <select class="form-select" id="employeeSex" required>
              <option selected disabled value="">Select</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
            <label for="employeeSex">Employee Sex<span class="text-danger">*</span></label>
          </div>

          <div class="col-md-6 py-3 form-floating">
          <select class="form-select" id="employeeType" required>
            <option selected disabled value="">Select</option>
            <option>Full-time</option>
            <option>Part-time</option>
            <option>Contract</option>
          </select>
          <label for="employeeType">Employee Type<span class="text-danger">*</span></label>
            </div>

            <div class="col-md-6 py-3 form-floating">
          <input type="text" class="form-control" id="designation" placeholder="Designation" required>
          <label for="designation">Designation<span class="text-danger">*</span></label>
            </div>

            <div class="col-md-6 py-3 form-floating">
          <select class="form-select" id="projectName" required>
            <option selected disabled value="">Select project name</option>
            <option>ASTHA</option>
            <option>PRABRIDDHI</option>
            <option>BMMDP</option>
            <option>Call PMU</option>
            <option>CoOf</option>
            <option>GO4IMPact</option>
            <option>H2O</option>
            <option>InSPIRE</option>
            <option>SARATHI</option>
            <option>SMILE</option>
            <option>STDF</option>
          </select>
          <label for="projectName">Employee Project Name<span class="text-danger">*</span></label>
            </div>

            <div class="col-md-6 py-3 form-floating">
          <input type="email" class="form-control" id="email" placeholder="Email" required>
          <label for="email">Email<span class="text-danger">*</span></label>
            </div>

            <div class="col-md-6 py-3 form-floating">
          <input type="tel" class="form-control" id="mobile" placeholder="Mobile" required>
          <label for="mobile">Mobile<span class="text-danger">*</span></label>
            </div>

            <div class="col-md-6 py-3 form-floating">
          <input type="date" class="form-control" id="joiningDate" placeholder="Date of Joining" required>
          <label for="joiningDate">Date of Joining<span class="text-danger">*</span></label>
            </div>

            <div class="col-md-6 py-3 form-floating">
          <input type="text" class="form-control" id="location" placeholder="Location" required>
          <label for="location">Location<span class="text-danger">*</span></label>
            </div>

            <div class="col-md-6 py-3 form-floating">
          <select class="form-select" id="status" required>
            <option selected disabled value="">Select</option>
            <option>Active</option>
            <option>Inactive</option>
          </select>
          <label for="status">Status<span class="text-danger">*</span></label>
            </div>

            <div class="col-md-6 py-3 form-floating">
          <textarea class="form-control" placeholder="Enter description" id="description" style="height: 120px" required></textarea>
          <label for="description">Description<span class="text-danger">*</span></label>
            </div>

            <div class="col-12 py-3">
          <label class="form-label">Add Picture<span class="text-danger">*</span></label>
          <input type="file" class="form-control" accept="image/*" required>
            </div>

            <div class="col-12 text-center pt-4">
          <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
            </div>


        </form>

      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php require('layouts/footer.php'); ?>
