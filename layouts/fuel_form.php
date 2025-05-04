<div class="col-12 text-end"></div>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
  <div class="container bg-white p-5 rounded-3 shadow-sm">
    <h2 class="mb-4 border-bottom pb-2">New Employee Information</h2>
    <form class="row g-4">
      <div class="col-md-6">
      <label class="form-label fw-semibold">Employee Name <span class="text-danger">*</span></label>
      <input type="text" class="form-control" placeholder="Enter employee name" required>
      <div class="form-text">Please enter employee name.</div>
      </div>
      <div class="col-md-6">
      <label class="form-label fw-semibold">Designation <span class="text-danger">*</span></label>
      <input type="text" class="form-control" placeholder="Enter designation" required>
      <div class="form-text">Please enter designation.</div>
      </div>
      <div class="col-md-6">
      <label class="form-label fw-semibold">Department/Project <span class="text-danger">*</span></label>
      <select class="form-select" required>
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
      <div class="form-text">Please enter department/project</div>
      </div>
      <div class="col-md-6">
      <label class="form-label fw-semibold">Date of Joining <span class="text-danger">*</span></label>
      <input type="date" class="form-control" required>
      <div class="form-text">Please enter date</div>
      </div>
      <div class="col-md-6">
      <label class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
      <input type="email" class="form-control" placeholder="Enter email" required>
      <div class="form-text">Please enter email.</div>
      </div>
      <div class="col-md-6">
      <label class="form-label fw-semibold">Contact Number <span class="text-danger">*</span></label>
      <input type="tel" class="form-control" placeholder="Enter contact number" required>
      <div class="form-text">Please enter number.</div>
      </div>
      <div class="col-12">
      <label class="form-label fw-semibold">Description <span class="text-danger">*</span></label>
      <textarea rows="4" class="form-control" placeholder="Enter description" required></textarea>
      <div class="form-text">Please describe.</div>
      </div>
      <div class="col-12">
      <label class="form-label fw-semibold">Add Picture <span class="text-danger">*</span></label>
      <input type="file" class="form-control" accept="image/*" required>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php require('footer.php'); ?>