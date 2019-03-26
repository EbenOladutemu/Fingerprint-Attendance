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
            <li class="breadcrumb-item active">New Attendance</li>
          </ol>

          <form action="/fingerprint-attendance/capture.php" name="courseSelect" method="POST">
            <div class="row">
              <div class="form-group col-6"> 
                <label for="level" class="text-bold">Select Level</label>
                <select class="form-control" onchange="ChangeContext(this.value)" required="">
                  <option value="1" class="form-control" selected>Select A Level</option>
                  <option value="100" class="form-control">100 Level</option>
                  <option value="200" class="form-control">200 Level</option>
                  <option value="300" class="form-control">300 Level</option>
                  <option value="400" class="form-control">400 Level</option>
                  <option value="500" class="form-control">500 Level</option>
                </select>
              </div>
              <div class="form-group col-6">
                <label for="courseName" class="text-bold">Select Course</label>
                <select id="select2" class="form-control" required=""></select>
              </div>
            </div>
            <input type="submit" name="courseSubmit" class="form-group btn btn-primary">
          </form>
          
          <div class="card-footer small text-muted">
            Updated today at <?php date_default_timezone_set("Africa/Lagos"); echo date('h:i:sa'); ?>
          </div>

        </div>
        <!-- /.container-fluid -->

    <?php include 'footer-admin.php'; ?>