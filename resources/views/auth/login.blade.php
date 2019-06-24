<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chickenland || Login User</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{URL::asset('css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="storage/public/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <h2>Chicken Land</h2>
                </div>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" method="POST" action="/loginPage" >

                  <div class="form-group">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="someone@mail.com" name="email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <div class="mt-3">
                    <input class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN IN" name="masuk">
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{URL::asset('js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{URL::asset('js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>
