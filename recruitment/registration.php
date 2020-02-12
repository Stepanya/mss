<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AXA Philippines | Life Insurance &amp; Investments</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../AdminLTE/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../AdminLTE/plugins/sweetalert2/sweetalert2.min.css">

  <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon">
</head>
<body class="hold-transition login-page">

<div class="overlay">
  <p class="text-white copyright"><a href="../login.php">Login</a> Copyright © 2019 AXA Phillippines. All rights reserved</p>
</div>
<div class="animate d-flex justify-content-center align-items-center">
  <div class="axa">
    <img class="line" src="../assets/img/line.png">
    <img class="letters" src="../assets/img/letters.png">
  </div>
</div>
<div class="login-box">
  <div class="card">
    
    <div class="card-body login-card-body">
      <p class="login-box-msg">Applicant Registration</p>

      <form class="reg-form">
        <div class="row form-group">
            <div class="col-sm-5">
              <label>First Name</label>
              <input type="text" name="fname" class="form-control form-control-sm fname" placeholder="Enter first name">
            </div>
            <div class="col-sm-5">
              <label>First Name</label>
              <input type="text" name="lname" class="form-control form-control-sm lname" placeholder="Enter last name">
            </div>
            <div class="col-sm-2">
              <label>M.I</label>
              <input type="text" name="mi" class="form-control form-control-sm mi" placeholder="M.I">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-sm-5">
              <label>Email</label>
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="email" name="email" class="form-control form-control-sm email" placeholder="Enter email">
              </div>
            </div>
            <div class="col-sm-7">
              <label>Why do you want to work with us?</label>
              <input type="text" name="reason" class="form-control form-control-sm reason" placeholder="Enter your reason for working with us">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-sm-4">
              <label>Position</label>
              <select class="form-control form-control-sm position" name="position" required>
                <option disabled selected>--Select Position--</option>
                <option value="Financial Adviser">Financial Adviser</option>
                <option value="Unit Manager">Unit Manager</option>
                <option value="Branch Head">Branch Head</option>
                <option value="Zone Head">Zone Head</option>
              </select>
            </div>
            <div class="col-sm-4">
              <label>Contact Number</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <input type="number" name="contact" class="form-control form-control-sm contact" placeholder="Enter contact number">
              </div>
            </div>
            <div class="col-sm-4">
              <label>Application Date</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input type="date" name="date" class="form-control form-control-sm date" onkeydown="return false">
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-sm-8">
              <label>Resume</label>
              <div class="custom-file p-0">
                <input type="file" name="resume" class="custom-file-input resume p-0" accept=".pdf">
                <label class="custom-file-label">PFD files only</label>
              </div>
            </div>
          </div>
        <div class="row justify-content-between">
          <div class="col-auto">
            <button class="btn btn-primary btn-flat">
              <span class="spinner-border spinner-border-sm loading"></span>
              Register
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="../AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- SweetAlert2 -->
<script src="../AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Global Functions -->
<script src="../assets/js/global.js"></script>

</body>
</html>

<script>
const loading = $('.loading')
loading.toggle()

var now = new Date().toJSON().slice(0,10).replace(/-/g,'-')

$('.date').attr('max', now)

$('.reg-form').submit(function(e) {
  e.preventDefault()
  var formData = new FormData(this)
  if (validateForm($(this))) {
    loading.show()
    $.ajax ({
      type: "POST",
      dataType: "json",
      data: formData,
      url: "register.php",
      processData: false,
      contentType: false,
      success: function(response) {
        loading.hide()
        toastSuccess(response)
        $('.reg-form').trigger("reset")
      },
      error: function(e) {
        toastError(e.responseText)
      }
    })
  }
})

$('.resume').change(function() {
  $('.custom-file-label').text($(this).val())
})
function validateForm(form) {
  var data = form.serializeArray().reduce(function(obj, item) {
      obj[item.name] = item.value;
      return obj;
  }, {});

  if (data.fname == "") 
    $('.fname').addClass('is-invalid') 
  if (data.lname == "") 
    $('.lname').addClass('is-invalid')
  if (data.mi == "") 
    $('.mi').addClass('is-invalid')
  if (data.email == "") 
    $('.email').addClass('is-invalid')
  if (data.reason == "") 
    $('.reason').addClass('is-invalid')
  if (data.position == "") 
    $('.position').addClass('is-invalid')
  if (!data.stage) 
    $('.stage').addClass('is-invalid')
  if (data.contact == "") 
    $('.contact').addClass('is-invalid')
  if (data.date == "") 
    $('.date').addClass('is-invalid')
  if (data.notes == "") 
    $('.notes').addClass('is-invalid')
  if (data.score == "") 
    $('.score').addClass('is-invalid')
  if (!$('.resume').val()) 
    $('.resume').addClass('is-invalid')

  setTimeout( function() {
    $('.reg-form input, .reg-form select, .reg-form textarea').removeClass('is-invalid')
  }, 5000)

  if ($('.reg-form input, .reg-form select, .reg-form textarea').hasClass('is-invalid')) {
    toastError("Please fill out all required fields.")
    return false
  } else 
    return true
}

</script>

<style>
body {
  width: 100%;
  height: 100%;
  background-image: url('../assets/img/bg.jpg')!important;
  background-repeat: no-repeat;
  background-size: cover!important;
  background-position: center center;  
}
.login-box {
  position: absolute;
  left: 15px;
  margin-top: 15px;
  width: 600px;
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
  height: 125px;
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