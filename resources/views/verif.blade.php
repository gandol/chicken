<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chickenland || Registrasi {{$status}}</title>
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
                  <h2 style="text-align:center;">{{$pesan}}</h2>
                </div>
                  <center>
                  @if($status == 'fail')
                    <img src="{{URL::asset('images/fail.png')}}"  alt="image" class="profile-pic" style="width:128px">
                  @endif
                  @if($status == 'ok')
                    <img src="{{URL::asset('images/sukses.png')}}"  alt="image" class="profile-pic" style="width:128px">
                  @endif
                  </center>
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
