
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->

            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>

          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

<!-- Modal -->
      <!-- <div class="container" >
            <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog modal-xl">
                
   
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
        </div> -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box text-light bg-dark">
              <div class="inner">
               <p><u><b>Dhaka Metro - CHA 52-0736</b></u></p>
                  <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view1);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: <?php if(isset($rows['current_reading'] )){ echo $rows['current_reading']; }?> km on 
                  <?php           
                 /* $timeStamp = $rows['previous_date'] ;
                  $timeStamp = date( "d-M-Y", strtotime($timeStamp));
                  echo $timeStamp; */
                  ?>
                  
                </p>

                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if(isset($rows['current_reading'] )){
                  echo $rows['current_reading'] + $value; }?> km</p>

                <p style="font-size: 14px;">Next General Service Date 
                <?php 

                  $timeStamp = $rows['curr_date']; 
                  $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                ?>
                
                </p>  


              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - CHA 53-6527</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view2);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>

                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>
              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - CHA 53-5300</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view3);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>

                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>

              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

          
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - CHA 53-6837</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view4);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km</p>

                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>

              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

           
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - CHA 56-3756</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view5);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>

                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>
              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

           
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - GHA 13-2865</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view6);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>

                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>

              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

          
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - GHA 15-0436</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view7);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>

                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>

              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          

          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - GHA 17-7422</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view8);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>
                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>
 
              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          
         
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - GHA 18-4839</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view9);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>

                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>
              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
            
            
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - GHA 18-2585</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view10);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>

                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>

              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
      </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - GHA 18-4019</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view11);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>
                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>
 
              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

            <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box text-light bg-dark">
              <div class="inner">
               <!-- <span class="fa fa-info-circle text-primary"> </span> -->
                <p><u><b>Dhaka Metro - CHA 52-0446</b></u></p>
                 <?php
                  $value = "3000";
                  
                  $rows = mysqli_fetch_array($view12);

                  ?>

                <!-- <p>Driver: <b></b></p> -->
                 <!--  <p style="background-color: green;">General Servicing</b></p> -->
                 <p><button class="fa fa-info-circle text-primary userinfo" data-id='<?php echo $rows["id"]?>' data-toggle="modal" data-target="#exampleModal"> General Servicing</button></p>
                <p style="font-size: 14px;">Last General Servicing Mileage: =<?php echo $rows['current_reading'] ?> km</p>
                <p style="font-size: 14px;">Next General Servicing Mileage: <?php if($rows['current_reading'] != null){
                  echo $rows['current_reading'] + $value; }?> km
                </p>

                <p style="font-size: 14px;">Next General Service Date: 
                <?php
                $timeStamp = $rows['curr_date'];  
                if (isset($timeStamp)) {
                $timeStamp = date( "d-M-y", strtotime($timeStamp. '+90 days'));
                  echo $timeStamp;
                  }
                  
                ?>
                
                </p>

              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>


        </div>
        <!-- /.row -->
        <!-- Main row -->
 
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require ('user_role.php'); ?>

<?php require ('footer.php'); ?>