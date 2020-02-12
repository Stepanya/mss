<?php 
include "include/header.php";
include "include/sidebar.php";
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Employee Registration</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Employee Registration</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
  	<div class="container-fluid p-1">
      <form class="reg-form">
        <div class="card step-1">
          <div class="card-header bg-navy">
            <h5>
              <i class="fa fa-users"></i>
              Step 1: Employee Details
            </h5>
          </div>
          <div class="card-body">
            <div class="row form-group">
              <div class="col-sm-6">
                <label>First Name</label>
                <input type="text" name="fname" class="form-control fname" placeholder="Enter first name">
              </div>
              <div class="col-sm-6">
                <label>Employee Code</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-secondary btn-sm gen-emp">Generate Employee Code</button>
                  </div>
                  <input type="text" name="employee_code" class="form-control emp-code" readonly>
                </div>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-6">
                <label>Last Name</label>
                <input type="text" name="lname" class="form-control lname" placeholder="Enter last name">
              </div>
              <div class="col-sm-6">
                <label>Password</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-secondary btn-sm gen-pass">Generate Password</button>
                  </div>
                  <input type="text" name="password" class="form-control password" readonly>
                </div>
              </div>
            </div>
            <div class="row form-group">
               <div class="col-sm-2">
                <label>Middle Initial</label>
                <input type="text" name="mi" class="form-control mi" placeholder="Enter M.I">
              </div>
              <div class="col-sm-5">
                <label>Email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="email" name="email" class="form-control email" placeholder="Enter Email">
                </div>
              </div>
              <div class="col-sm-3">
                <label>Gender</label>
                <select class="form-control gender" name="gender">
                  <option disabled selected>--Select Gender--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4">
                <label>Birthdate</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="date" name="birthdate" max="2001-12-31" class="form-control birthdate" onkeydown="return false">
                </div>
              </div>
              <div class="col-sm-4">
                <label>Hire Date</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="date" name="hiredate" class="form-control hiredate" onkeydown="return false">
                </div>
              </div>
            </div>
            <hr>
            <div class="btn-group float-right">
              <button type="button" class="btn btn-primary to-page2">Next</button>
            </div>
          </div>
        </div>
        <div class="card step-2" hidden>
          <div class="card-header bg-navy">
            <h5>
              <i class="fa fa-users"></i>
              Step 2: Employee Department
            </h5>
          </div>
          <div class="card-body">
            <div class="row form-group">
              <div class="col-sm-4">
                <label>Position</label>
                <select class="form-control position" name="position" required>
                  <option disabled selected>--Select Position--</option>
                  <option value="Financial Adviser">Financial Adviser</option>
                  <option value="Unit Manager">Unit Manager</option>
                  <option value="Branch Head">Branch Head</option>
                  <option value="Zone Head">Zone Head</option>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4">
                <label>Zone Number</label>
                <select class="form-control select2 zone-no" name="zone_no" required>
                  <option disabled selected>--Select Zone Number--</option>
                </select>
              </div>
              <div class="col-sm-1"></div>
              <div class="col-sm-4">
                <label>Branch</label>
                <select class="form-control branch" name="branch" required>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4">
                <label>Zone Head</label>
                <input type="text" class="form-control zone-head" name="zone_head" readonly>
              </div>
              <div class="col-sm-1"></div>
              <div class="col-sm-4">
                <label>Branch Head</label>
                <input type="text" class="form-control branch-head" name="branch_head" readonly>
              </div>
            </div>
            <div class="btn-group float-right">
              <button type="button" class="btn btn-secondary previous">Previous</button>
              <button type="button" class="btn btn-primary to-page3">Next</button>
            </div>
          </div>
        </div>
        <div class="card step-3" hidden>
          <div class="card-header bg-navy">
            <h5>
              <i class="fa fa-book"></i>
              Step 3: Employee Profile
            </h5>
          </div>
          <div class="card-body">
            <div class="row form-group">
              <div class="col-sm-12">
                <label>Address</label>
                <input type="text" name="address" class="form-control address" placeholder="Enter Address">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4">
                <label>Mobile Number</label>
                <input type="number" name="contact" class="form-control contact" placeholder="Enter Mobile number">
              </div>
              <div class="col-sm-4">
                <label>Employment Status</label>
                <select class="form-control emp-status" name="emp_status">
                  <option disabled value selected>--Select Employment Status--</option>
                  <option value="Full Time">Full Time</option>
                  <option value="Part Time">Part Time</option>
                  <option value="Casual">Casual</option>
                </select>
              </div>
            </div>
            <div class="btn-group float-right">
              <button type="button" class="btn btn-secondary previous">Previous</button>
              <button class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

var now = new Date().toJSON().slice(0,10).replace(/-/g,'-')

$('.hiredate').attr('max', now)

$('.to-page2').click(function() {
  if (validateStep1()) nextPage($(this))
})
$('.to-page3').click(function() {
  if (validateStep2()) nextPage($(this))
})

$('.reg-form').submit(function(e) {
  e.preventDefault()
  if (validateStep3()) {
    $.ajax ({
      type: "POST",
      dataType: "json",
      data: $(this).serializeArray(),
      url: "../employee/registration/register.php",
      success: function(response) {
        toastSuccess(response)
        $('.reg-form').trigger("reset")
      },
      error: function(e) {
        toastError(e.responseText)
      }
    })
  }
})

$('.previous').click(function() {
  previousPage($(this))
})

$('.gen-pass').click(function() {
  var code = "";
  var chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  for (var i = 0; i < 8; i++) 
      code += chars.charAt(Math.floor(Math.random() * chars.length));

  $('.password').val(code)
})

$('.gen-emp').click(function() {
  var first = $('.fname').val()
  var last = $('.lname').val()

  if (!first || !last) { 
    toastError("Please enter first name and last name first.")
    $('.fname').addClass('is-invalid')
    $('.lname').addClass('is-invalid')
    removeErrors()
    return 
  }

  var code = first.charAt(0) + last.charAt(0) + Math.floor(1000 + Math.random() * 9000)
  $('.emp-code').val(code.toUpperCase())
})

$.ajax ({
  type: "POST",
  url: "../employee/registration/get_zone.php",
  success: function(html) {
    $(".zone-no").append(html)
  }
})

$('.zone-no').change(function() {
  var id = $(this).val()

   $.ajax ({
      type: "POST",
      dataType: "json",
      url: "../employee/registration/get_zone_branch.php",
      data: {id:id},
      cache: false,
      success: function(data) {
        $(".zone-head").val(data.zoneHead)
        $(".branch").html(data.branch)
      }
  })
})

$('.branch').change(function() {
  var id = $(this).val()

   $.ajax ({
      type: "POST",
      url: "../employee/registration/get_branch_head.php",
      data: {id:id},
      success: function(data) {
        $(".branch-head").val(data)
      }
  })
})

function nextPage(el) {
  var grandparent = el.parent().parent().parent()

  if (grandparent.hasClass('step-1')) { 
    grandparent.animate({
      marginLeft: "-=100%",
      marginRight: "+=100%", 
      opacity: "0.0"
    }, 300, "swing", function() {
      $('.step-1').attr('hidden', true)
      $('.step-2').addClass('page-right').removeAttr('hidden')
      $('.step-2').animate({
        left: "-=100%",
        opacity: "1"
      }, 300, "swing")
    })
  } else if (grandparent.hasClass('step-2')) { 
    grandparent.animate({
      marginLeft: "-=100%",
      marginRight: "+=100%", 
      opacity: "0.0"
    }, 300, "swing", function() {
      $('.step-2').attr('hidden', true)
      $('.step-3').addClass('page-right').removeAttr('hidden')
      $('.step-3').animate({
        left: "-=100%",
        opacity: "1"
      }, 300, "swing")
    })
  }
}

function previousPage(el) {
  var grandparent = el.parent().parent().parent()

  if (grandparent.hasClass('step-2')) { 
    grandparent.animate({
      marginLeft: "+=100%",
      marginRight: "-=100%", 
      opacity: "0.0"
    }, 300, "swing", function() {
      $('.step-2').attr('hidden', true)
      $('.step-1').removeClass('page-right').removeAttr('hidden')
      $('.step-1').animate({
        right: "-=100%",
        opacity: "1"
      }, 300, "swing")
    })
  } else if (grandparent.hasClass('step-3')) { 
    grandparent.animate({
      marginLeft: "+=100%",
      marginRight: "-=100%", 
      opacity: "0.0"
    }, 300, "swing", function() {
      $('.step-3').attr('hidden', true)
      $('.step-2').removeClass('page-right').removeAttr('hidden')
      $('.step-2').animate({
        left: "+=100%",
        opacity: "1"
      }, 300, "swing")
    })
  }
}

function validateStep1() {

  if ($('.fname').val() == "")
    $('.fname').addClass('is-invalid')
  if ($('.lname').val() == "")
    $('.lname').addClass('is-invalid')
  if ($('.mi').val() == "")
    $('.mi').addClass('is-invalid')
  if ($('.email').val() == "") 
    $('.email').addClass('is-invalid')
  if (!$('.gender').val())  
    $('.gender').addClass('is-invalid')
  if ($('.birthdate').val() == "") 
    $('.birthdate').addClass('is-invalid')
  if ($('.hiredate').val() == "") 
    $('.hiredate').addClass('is-invalid')
  if ($('.password').val() == "") 
    $('.password').addClass('is-invalid')
  if ($('.emp-code').val() == "") 
    $('.emp-code').addClass('is-invalid')

  removeErrors()

  if ($('.reg-form input, .reg-form select').hasClass('is-invalid')) {
    toastError("Please fill out all required fields.")
    return false
  } else

  return true
} 

function validateStep2() {
  
  if (!$('.position').val())
    $('.position').addClass('is-invalid')
  if (!$('.zone-no').val())
    $('.zone-no').addClass('is-invalid')
  if (!$('.branch').val())
    $('.branch').addClass('is-invalid')

  removeErrors()

  if ($('.reg-form input, .reg-form select').hasClass('is-invalid')) {
    toastError("Please fill out all required fields.")
    return false
  } 

  return true
}
function validateStep3() {
  
  if ($('.address').val() == "") 
    $('.address').addClass('is-invalid')
  if ($('.contact').val() == "")
    $('.contact').addClass('is-invalid')
  if (!$('.emp-status').val()) 
    $('.emp-status').addClass('is-invalid')

  removeErrors()

  if ($('.reg-form input, .reg-form select').hasClass('is-invalid')) {
    toastError("Please fill out all required fields.")
    return false
  } 

  return true 
}

function removeErrors() {
  setTimeout( function() {
    $('.reg-form input, .reg-form select').removeClass('is-invalid')
  }, 5000)
}
</script>

<?php include "include/footer.php";?>