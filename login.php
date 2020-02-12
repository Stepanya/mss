<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AXA Philippines | Life Insurance &amp; Investments</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="AdminLTE/plugins/sweetalert2/sweetalert2.min.css">

  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>
<body class="hold-transition login-page">

<div class="overlay">
  <p class="text-white copyright"><a href="recruitment/registration.php">Applicant Registration</a> Copyright © 2019 AXA Phillippines. All rights reserved</p>
</div>
<div class="animate d-flex justify-content-center align-items-center">
  <div class="axa">
    <img class="line" src="assets/img/line.png">
    <img class="letters" src="assets/img/letters.png">
  </div>
</div>
<div class="login-box">
  <div class="card-header p-0 border-0">
    <img class="img-header" src="assets/img/header.jpg">
  </div>
  <div class="card">
    
    <div class="card-body login-card-body">
      <p class="login-box-msg">Log in to start your session</p>

      <form class="login-form">
        <div class="input-group mb-3">
          <input type="text" class="form-control code" name="code" placeholder="Employee Code">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control password" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-auto" data-toggle="tooltip" title="Please contact the administrator to change your password">
            <a href="#">I forgot my password</a>
          </div>
          <div class="col-auto">
            <button class="btn btn-primary btn-flat">
              <span class="spinner-border spinner-border-sm loading"></span>
              Log In
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- SweetAlert2 -->
<script src="AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Global Functions -->
<script src="assets/js/global.js"></script>

</body>
</html>

<script>
const loading = $('.loading')
loading.toggle()
$('[data-toggle="tooltip"]').tooltip()

var url = window.location.href
var get = url.split('?')[1]

if (get == "kick") {
  setTimeout(function() {
    toastError("Please login to continue.")
  }, 2000)
} else if (get == "out") {
  setTimeout(function() {
    toastSuccess("You have been logged out.")
  }, 2000)
}

$('.login-form').submit(function(e) {
  e.preventDefault()
  if (validateForm($(this))) {
    loading.show()
    setTimeout(function() {
      $.ajax ({
        type: "POST",
        dataType: "json",
        data: $('.login-form').serializeArray(),
        url: "login/controller.php",
        success: function(response) {
          loading.hide()
          toastSuccess(response)
          $('.login-form').trigger("reset")
          redirect()
        },
        error: function(e) {
          loading.hide()
          toastError(e.responseText)
        }
      })
    }, 0)
  }
})

function redirect() {
  setTimeout(function() {
    window.location.replace("menu/dashboard.php");
  }, 2000)
}

function validateForm(form) {
  var data = form.serializeArray().reduce(function(obj, item) {
      obj[item.name] = item.value;
      return obj;
  }, {});

  if (data.code == "") 
    $('.code').addClass('is-invalid') 
  if (data.password == "") 
    $('.password').addClass('is-invalid')

  removeError()

  if ($('.login-form input').hasClass('is-invalid')) {
    toastError("Please fill out all required fields.")
    return false
  } else 
    return true
}

function removeError() {
  setTimeout( function() {
    $('.login-form input').removeClass('is-invalid')
  }, 5000)
}

</script>

<style>
body {
  width: 100%;
  height: 100%;
  background-image: url('assets/img/bg.jpg')!important;
  background-repeat: no-repeat;
  background-size: cover!important;
  background-position: center center;  
}
.login-box {
  position: absolute;
  left: 15%;
}
.overlay {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0; 
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: -1; 
}
.card-header {
  background-color: rgba(0,0,0,0); 
}
.img-header {
  width: 100%;
  opacity: 0.5;
}
.copyright {
  position: absolute;
  bottom: -15px;
  right: 5px;
}
.animate {
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0; 
  left: 0;
  right: 0;
  bottom: 0;
  background-color: white;
  z-index: 1000;
  animation: fadeout 2.5s forwards;
  animation-timing-function: ease;
}
.axa {
  width: 412px;
  height: 412px;
  border: 10px solid rgb(46, 49, 146);
  animation: borderin 1s;
  animation-timing-function: ease;
}
.line {
  position: relative;
  top: -10px;
  right: 10px;
  width: 412px;
  height: 412px;
  animation: fromtop 1s;
  animation-timing-function: ease;
}
.letters {
  position: relative;
  top: -422px;
  right: 11px;
  width: 412px;
  height: 412px;
  animation: frombot 1s;
  animation-timing-function: ease;
}

/*ANIMTATION*/
@keyframes fadeout {
  0% {
    display: block;
  }
  50% {
    left: 0;
    opacity: 1;
  }
  100% {
    left: 100%;
    opacity: 0;
    display: none;
  }
}

@keyframes frombot {
  from {top: 0px;}
  to {top: -422px;}
}

@keyframes fromtop {
  from {top: -110px;}
  to {top: -10px;}
}

@keyframes borderin {
  from {
    width: 500px;
    height: 500px;
    opacity: 0.2;
  }
  to {
    width: 412px;
    height: 412px;
    opacity: 1;
  }
}
</style>