
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fuel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Fuel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Modal -->
      <div class="container" >
            <!-- Modal -->
            <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog modal-xl">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"></h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body">
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                  
                </div>
            </div>

            <br/>
        </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fuel Record List</h3>
              </div>

  
              <!-- /.card-header -->
              <div class="card-body">
                <div class="float-left">
                <a href="fuel_form.php" type="submit" name="save" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add</a>
                </div>
                  <style>
                  table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                  }

                  td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  }


                  </style>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#SN</th>
                    <th>Driver Name</th>
                    <th>Car Number</th>
                    <th>Project</th>
                    <th>Curent Reading</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php 

                  $no=1;
                  while ($rows = mysqli_fetch_array($show)) {

                ?>
                  <tr>
                    <td><?php echo $no. "</br>"; ?></td>
                   <td><?php echo $rows['driver_name']?></td>
                    <td><?php echo $rows['vehicle_num']?></td>
                    <td><?php echo $rows['project_name']?></td>
                    <td><?php echo $rows['current_reading']?></td>
                    <td><?php echo $rows['submit_at']?></td>
                     <td align="center">
                    <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">Action<span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                   <button data-id='<?php echo $rows["id"]?>' class='dropdown-item fas fa-eye userinfo'> View</button>
                    <div class="dropdown-divider"></div>

                    <!-- <a href="#" class="dropdown-item" data-toggle="modal" data-id='' data-target="modalRegister" class='fa fa-info-circle text-primary userinfo'>Register</a> -->
                    <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="modal/fuel_pdf.php?userId=<?php echo $rows["id"]?>" target="_blank"><span class="fa fa-print text-primary"></span> Print</a>
                    <div class="dropdown-divider"></div>


                  <?php if ($_SESSION['user_level'] === 'ba'){ ?> 
                   <a class="dropdown-item" href="fuel_edit.php?editId=<?php echo $rows["id"]?>"><span class="fa fa-edit text-primary"></span> Edit</a>
                    <div class="dropdown-divider"></div>

                  <?php

                  echo "<a onClick=\"javascript: return confirm('Are you sure want to delete this record?');\" class= 'dropdown-item' href='delete.php?fuel_ID=".$rows["id"]."'>"?><i class="fa fa-trash" style="color:red"></i> Delete</a>
             <?php    } ?>
                    </div>
                    </td> 
                    </tr>


              <?php 
                $no++; 

               } 

               ?>

               <!-- Button trigger modal -->

                  </tbody>
                </table>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<script type='text/javascript'>
            $(document).ready(function(){

                $('.userinfo').click(function(){
                   
                    var userid = $(this).data('id');

                    // AJAX request
                    $.ajax({
                        url: 'modal/fuel.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.modal-body').html(response); 

                            // Display Modal
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>

<script>
<?php if(isset($_GET['msg'])): ?>

Command: toastr["success"]("<?php echo $_GET['msg']?>")

<?php endif ?>
</script>

 <?php require_once('footer.php'); ?>


