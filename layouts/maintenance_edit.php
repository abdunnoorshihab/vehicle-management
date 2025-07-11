
<div class="content-wrapper">
<section class="content">
<div class="container-fluid">
<div class="col-md-11">
<h5 class="card-header">Edit Maintenance Form</h5>
<!-- <p style="float:right;"><a href="view.php">Back to list</a></p> -->
<div class="card-body">

  <form class="form-row" id="register_form" action="form_insert.php" method="post">
  <input type="hidden" name="id" value="">
     <div class="form-group col-md-6">
    <label for="vehicle">Vehicle Number<span class="text-danger">*</span></label>
    <select class="vehicle2 form-control" id="vehicle" name="vehicle_no" required>
    <option value="<?php echo $row['vehicle_id'] ?>"><?php echo $data['vehicle_num'] ?></option> 
    <?php while ($row = mysqli_fetch_assoc($vn)): ?>
    <option value="<?php echo $row['vehicle_id'] ?>"><?php echo $row['vehicle_num'] ?></option>
          <?php endwhile; ?>
    </select>
    <small class="help-text text-muted">Please select your car no. Example: Dhaka Metro-GHA-13-2865</small>
    </div>  

    <div class="form-group col-md-6">
    <label for="name">Driver Name<span class="text-danger">*</span></label>
    <select class="name form-control" id="driver" name="driver_name" required>
    <option value="<?php echo $data['driver_id'] ?>"><?php echo $data['driver_name'] ?></option>
    <?php while ($row = mysqli_fetch_assoc($dr)): ?>
      <option value="<?php echo $row['driver_id'] ?>"><?php echo $row['driver_name'] ?></option>
    <?php endwhile; ?>
    </select>
    <small class="help-text text-muted">Please select your project name. Example: Sabur Khan</small>
    </div>
 
  <div class="form-group col-md-6">
  <label for="project">Project Name<span class="text-danger">*</span></label>
  <select class="project form-control" id="project" name="project" required>
  <option value="<?php echo $data['project_id'] ?>"><?php echo $data['project_name'] ?></option>
  <?php while ($row = mysqli_fetch_assoc($project)): ?>
      <option value="<?php echo $row['project_id'] ?>"><?php echo $row['project_name'] ?></option>
  <?php endwhile; ?>
  </select>
  <small class="help-text text-muted">Please select your project name. Example: scbd</small>
  </div>

   <div class="form-group col-md-6">
  <label for="vendor">Service Type<span class="text-danger">*</span></label>
  <select class="type form-control" id="cat" name="type" required>
  <option value="<?php echo $data['type_id'] ?>"><?php echo $data['type_name'] ?></option>
   <?php while ($row = mysqli_fetch_assoc($st)): ?>
      <option value="<?php echo $row['type_id'] ?>"><?php echo $row['type_name'] ?></option>
      <?php endwhile; ?>
  </select>

  
  <small class="help-text text-muted">Please select repair vendor. Example: xyz automobiles</small>
  </div>

  <div class="form-group col-md-6">
  <label for="name">Previous meter reading<span class="text-danger">*</span></label>
  <input type=number value="<?php echo $data['previous_reading'] ?>"
  placeholder="" id="p_reading"
  class="form-control " name="p_reading" min="0" max="" required>
  <small class="help-text text-muted">Data will display automaticaly on select vehicle number</small>
  </div>

    <div class="form-group col-md-6">
  <label for="name">Current meter reading<span class="text-danger">*</span></label>
  <input type=number value="<?php echo $data['current_reading'] ?>"
  placeholder="Enter current meter reading" id="name"
  class="form-control" name="c_reading" min="0" max="" required>
  <small class="help-text text-muted">Please enter curent meter reading. Example: 7000</small>
  </div>

   <div class="form-group col-md-6">
    <label for="pass_time">Previous servicing date<span
                class="text-danger">*</span></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
            </div>
           <input type="date" id="p_date" value="<?php echo $data['previous_date'] ?>" name="p_date" class="form-control">                                      
        </div>
    <small class="help-text text-muted">Data will display automaticaly on select vehicle number.</small></div>

    <div class="form-group col-md-6">
    <label for="pass_time">Current servicing date<span
                class="text-danger">*</span></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
            </div>
           <input type="date" id="birthday" value="<?php echo $data['curr_date'] ?>" name="c_date" class="form-control">
                                      
        </div>
        <small class="help-text text-muted">Please enter current servicing date. Format: dd/mm/yyyy</small>                    
    </div>

<div class="form-group col-md-6">
<label for="problems">Choose car problems<span class="text-danger">*</span>
</label>
<select class="problems form-control" id="problems" name="prob[]" multiple="multiple" required>
<?php while ($row = mysqli_fetch_assoc($problem)): ?>


<?php 
$arr=explode(",",$data['problems']);
foreach ($arr as $value) { ?>
   <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
<?php } ?>

      <?php echo $row['problem_list'] ?></option>
  <?php endwhile; ?>
<!--<input type=text value=""
  placeholder="Write the repair vendor name" id="vn"
  class="form-control" name="other_vn" style='display:none;' required> -->
  <input type="text" class="form-control" name="othervendor" id="change" placeholder="Write repair vendor name" style='display:none;' />
</select>
<small class="help-text text-muted">Please choose your car problems. Example: Water Wash</small>
</div>

<!--  <div class="form-group col-md-6">
  <label for="vendor">Select repair vendor<span class="text-danger">*</span></label>
  <select class="vendor form-control" id="vendor" name="vendor" onchange='Checkyesno(this.value);' required>
  <option></option>
  <?php /* while ($row = mysqli_fetch_assoc($rv)): ?>
      <option value="<?php echo $row['rv_id'] ?>"><?php echo $row['rv_name'] ?></option>
      <?php endwhile; */?>   
  <option value="others">Other</option>
  <input type=text value=""
  placeholder="Write the repair vendor name" id="vn"
  class="form-control" name="other_vn" style='display:none;' required>
  <input type="text" class="form-control" name="othervendor" id="vendor_change" placeholder="Write repair vendor name" style='display:none;' />
  </select>

  
  <small class="help-text text-muted">Please select repair vendor. Example: xyz automobiles</small>
  </div> -->

<!--   <div class="form-group col-md-6">
  <label for="pass_time">Choose Date<span
  class="text-danger">*</span></label>
  <div class="input-group">
  <div class="input-group-prepend">
  <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
  </div>
  <input type="text" required name="date" id="date" class="form-control" style="padding: .375rem .75rem;background:#fff" value="dd-mm-yyyy" autocomplete='off' readonly>

  </div>                    
  </div> -->
     <div class="form-group col-md-6">
    <label for="r_name">Recommender Name<span class="text-danger">*</span></label>
    <select class="r_name form-control" id="recommend" name="r_name" required>
    <option value="<?php echo $data['recommender_id'] ?>"><?php echo $data['r_name'] ?></option>
    <?php while ($row = mysqli_fetch_assoc($rc)): ?>
      <option value="<?php echo $row['recommender_id'] ?>"><?php echo $row['r_name'] ?></option>
    <?php endwhile; ?>
    </select>
    <small class="help-text text-muted">Please select your recommender name. Example: Sabur Khan</small>
    </div>

       <div class="form-group col-md-6">
    <label for="a_name">Approver Name<span class="text-danger">*</span></label>
    <select class="a_name form-control" id="approver" name="a_name" required>
    <option value="<?php echo $data['approver_id'] ?>"><?php echo $data['a_name'] ?></option>
    <?php while ($row = mysqli_fetch_assoc($ap)): ?>
      <option value="<?php echo $row['approver_id'] ?>"><?php echo $row['a_name'] ?></option>
    <?php endwhile; ?>
    </select>
    <small class="help-text text-muted">Please select your recommender name. Example: Sabur Khan</small>
    </div>

  <div class="col-12">
  <div class="float-right">
  <button type="submit" name="save" class="btn btn-sm btn-primary"><i class="fas fa-download"></i> Update</button>
  <a href="maintenance_list.php" type="submit" class="btn btn-sm btn-secondary"></i> Cancel</a>
  </div>
  </div>
  </form>
</div>
</div>
</div>
</section>
</div>

<!-- <script type="text/javascript">
function Checkvendor(val){
 var element=document.getElementById('vendor');
 if(val=='pick a vendor'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>  -->
<!-- <script>
function changeStatus(){
  var status = document.getElementById("cat");
  if (status.value == "other") {
    //alert('yes');
    document.getElementById("p_reading").style.visibility="hidden";
  }

  else{
    document.getElementById("p_reading").style.visibility="visible";
  }
}
</script> -->



<!-- <script type="text/javascript">
     function Checkyes(val) {
  var element = document.getElementById('change');
  if (val == 'Select repair vendor' || val == 'other')
    element.style.display = 'block';
  else
    element.style.display = 'none';

}
</script> -->

<script type="text/javascript">
  $("select").on('click', 'option', function() {
    if ($("select option:selected").length > 3) {
        $(this).removeAttr("selected");
        // alert('You can select upto 3 options only');
    }
});
</script>

<!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $('#vehicle').select2({
            placeholder: "Select your vehicle number",
            allowClear: true
        });
</script>



<?php require_once('footer.php'); ?>