<?php include 'head.php'?>
    <div class="container" style="margin-top: 150px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">Admin Login</div>
        <div class="card-body">
          <form action="/fingerprint-attendance/dashboard.php" name="adminLogin" method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputUsername" class="form-control" placeholder="Email address" required="required"  autofocus="autofocus" >
                <label for="inputUsername">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" autofocus="autofocus">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <!-- <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div> -->
            <input type="submit" name="adminSubmit" class="btn btn-primary btn-block">           
          </form>
        </div>
      </div>
    </div>

<?php include 'footer.php'?>
