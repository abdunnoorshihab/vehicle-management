
<?php require('header.php'); ?>
<?php require('layouts/admin_menu.php'); ?>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Container -->
  <div class="container py-5" style="margin-left: 260px; max-width: 900px;">
  <h2 class="mb-5 fw-bold">New Joiner Form</h2>

  <form class="row">
    <div class="col-md-6 mb-4">
      <label class="form-label fw-bold">Employee Name <span class="text-danger">*</span></label>
      <input type="text" class="form-control shadow-sm" placeholder="Enter employee name" required>
      <div class="form-text mt-1">Please enter employee name.</div>
    </div>

    <div class="col-md-6 mb-4">
      <label class="form-label fw-bold">Designation <span class="text-danger">*</span></label>
      <input type="text" class="form-control shadow-sm" placeholder="Enter designation" required>
      <div class="form-text mt-1">Please enter designation.</div>
    </div>

    <div class="col-md-6 mb-4">
      <label for="department" class="form-label fw-bold">Department/Project <span class="text-danger">*</span></label>
      <select id="department" class="form-control shadow-sm rounded" required>
        <option value="" disabled selected>Select department/project</option>
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
      <div class="form-text mt-1">Please enter department/project</div>
    </div>

    <div class="col-md-6 mb-4">
      <label class="form-label fw-bold">Date of Joining <span class="text-danger">*</span></label>
      <input type="date" class="form-control shadow-sm" required>
      <div class="form-text mt-1">Please enter date.</div>
    </div>

    <div class="col-md-6 mb-4">
      <label class="form-label fw-bold">Email <span class="text-danger">*</span></label>
      <input type="email" class="form-control shadow-sm" placeholder="Enter email" required>
      <div class="form-text mt-1">Please enter email.</div>
    </div>

    <div class="col-md-6 mb-4">
      <label class="form-label fw-bold">Contact Number <span class="text-danger">*</span></label>
      <input type="tel" class="form-control shadow-sm" placeholder="Enter contact number" required>
      <div class="form-text mt-1">Please enter number.</div>
    </div>

    <div class="col-12 mb-4">
      <label class="form-label fw-bold">Description <span class="text-danger">*</span></label>
      <textarea rows="4" class="form-control shadow-sm" placeholder="Enter description" required></textarea>
      <div class="form-text mt-1">Please describe.</div>
    </div>

        <div class="col-12 mb-4">
            <label for="addPicture" class="form-label fw-semibold">Add Picture <span class="text-danger">*</span></label>
            <input class="form-control" type="file" id="addPicture" accept="image/*" required>
            <div class="form-text">Please upload a picture.</div>
        </div>




    <div class="col-12 d-flex justify-content-end gap-3 mt-4">
    <button type="reset" class="btn btn-secondary px-5 py-2">Cancel</button>
    <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
        </div>
      </form>
    </div>

<?php require('layouts/footer.php'); ?>

