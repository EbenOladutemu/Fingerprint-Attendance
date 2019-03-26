<?php include 'head-admin.php'; ?>
<?php include 'nav.php'; ?>
  <div id="wrapper">
    <!-- Side bar here -->
    <?php include 'sidebar.php';?>
      
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add New Student</li>
          </ol>

          <form action="#" name="courseSelect" method="POST">
            <div class="row">
              <div class="form-group col-6"> 
                <label for="matricNO" class="text-bold">Matric No</label>
                <input type="text" name="matricNO" class="form-control" placeholder="Enter Matriculation Number" required="">
              </div>
              <div class="w-100"></div>
              <div class="form-group col-6">
                <label for="capture" class="text-bold">Capture Your Finger</label>
                <input type="image" class="form-control border capture-box" value="">
              </div>
            </div>
            <input type="submit" name="captureSubmit" class="form-group btn btn-primary" onclick="swal()">
          </form>
          
          <div class="card-footer small text-muted">
            Updated today at <?php date_default_timezone_set("Africa/Lagos"); echo date('h:i:sa'); ?>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © OAU Ife <?php echo date('Y') ?></span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      // swal({
      //   title: "Success!",
      //   icon: "success",
      //   button: "Continue",
      // });
      swal.stopLoading()
      $("input").click(function(swal){
        $(this).hide();
      });
      $("input").show(function(swal){
        event.preventDefault();
      });
    </script>
    <?php include 'footer-admin.php'; ?>