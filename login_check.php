<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Form Output</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .profile-box {
      background-color: #f8f9fa;
      border-radius: 8px;
      padding: 2rem;
      border: 1px solid #dee2e6;
    }
    .profile-label {
      font-weight: 600;
      color: #212529;
    }
    .profile-value {
      color: #495057;
    }
    .profile-img {
      width: 160px;
      height: 200px;
      object-fit: cover;
      border: 1px solid #dee2e6;
      border-radius: 8px;
    }
  </style>
</head>
<body class="bg-light py-5">
  <div class="container bg-white p-5 rounded-3 shadow-sm">
    <h2 class="mb-4 border-bottom pb-2 text-center">Swisscontact Family Welcomes a New Member!</h2>
    <div class="row g-4">

      <div class="col-md-4 text-center">
        <img src="pngtree-cartoon-of-a-man-dressed-formally-png-image_16188960.png" alt="Profile Picture" class="profile-img">
      </div>

      <div class="col-md-8">
        <div class="profile-box">
          <p><span class="profile-label">Name:</span> <span class="profile-value">John Doe</span></p>
          <p><span class="profile-label">Designation:</span> <span class="profile-value">Program Manager</span></p>
          <p><span class="profile-label">Department/Division:</span> <span class="profile-value">Astha</span></p>
          <p><span class="profile-label">Date of Joining:</span> <span class="profile-value">2024-03-15</span></p>
          <p><span class="profile-label">Email address:</span> <span class="profile-value">john.doe@example.com</span></p>
          <p><span class="profile-label">Contact number:</span> <span class="profile-value">+880123456789</span></p>
        </div>
      </div>

      <div class="col-12 mt-4">
        <div class="profile-box">
          <p class="profile-label mb-1">Description:</p>
          <p class="profile-value">John is an experienced professional who recently joined the Astha project under Swisscontact. He will contribute to our innovation team with his strategic insight and leadership.</p>
        </div>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>