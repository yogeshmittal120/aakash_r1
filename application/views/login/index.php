  <div class="container" style="height:100vh;">

    <!-- Outer Row -->
    <div class="row justify-content-center" style="height:100%;">

      <div class="col-xl-10 col-lg-12 col-md-9" style="align-self: center;">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background: url(https://scitechdaily.com/images/Radical-New-View-of-Gene-Control-777x518.jpg);"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
                  </div>
                 
                  <form id="form1" method="post">
                
                    <div class="form-group">
                      <input type="text" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="rememberme">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button id="btn" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <!-- <hr> -->
                    <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div> -->
                  <div class="text-center">
                    <!-- <a class="small" href="<?php echo base_url('Login/register') ?>">Create an Account!</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <script src="<?php echo base_url("assets/scripts/login/login.js?d=".date("Ymdhis")) ?>"></script>