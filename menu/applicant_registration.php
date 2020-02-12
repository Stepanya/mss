<?php 
include "include/header.php";
include "include/sidebar.php";
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Applicant Registration</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Applicant Registration</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="card">
        <div class="card-header bg-navy text-center">
          <h5><i class="fa fa-user-plus"></i></h5>
        </div>
        <form class="reg-form" enctype='multipart/form-data'>
          <div class="card-body">
            <div class="row form-group">
              <div class="col-sm-5">
                <label>First Name</label>
                <input type="text" name="fname" class="form-control fname" placeholder="Enter first name">
              </div>
              <div class="col-sm-5">
                <label>First Name</label>
                <input type="text" name="lname" class="form-control lname" placeholder="Enter last name">
              </div>
              <div class="col-sm-2">
                <label>Middle Initial</label>
                <input type="text" name="mi" class="form-control mi" placeholder="M.I">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-5">
                <label>Email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="email" name="email" class="form-control email" placeholder="Enter email">
                </div>
              </div>
              <div class="col-sm-7">
                <label>Why do you want to work with us?</label>
                <input type="text" name="reason" class="form-control reason" placeholder="Enter your reason for working with us">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-3">
                <label>Position</label>
                <input type="text" name="position" class="form-control position" placeholder="Enter position">
              </div>
              <div class="col-sm-3">
                <label>Stage</label>
                <select name="stage" class="form-control stage">
                  <option selected disabled>--Select stage--</option>
                  <option value="AXA Discorvery Day">AXA Discorvery Day (Seminar)</option>
                  <option value="Arise">Arise</option>
                  <option value="Insurance Commissioner Exam">Insurance Commissioner Exam</option>
                  <option value="Encoded">Encoded (Hired)</option>
                  <option value="No Hire">No Hire</option>
                </select>
              </div>
              <div class="col-sm-3">
                <label>Contact Number</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                  </div>
                  <input type="number" name="contact" class="form-control contact" placeholder="Enter contact number">
                </div>
              </div>
              <div class="col-sm-3">
                <label>Application Date</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="date" name="date" class="form-control date" onkeydown="return false">
                </div>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-12">
                <label>Interview Notes</label>
                <textarea rows="2" class="form-control notes" name="notes" placeholder="Enter interview notes"></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-3">
                <label>Interview Score</label>
                <input type="number" name="score" class="form-control score" placeholder="Enter score">
              </div>
              <div class="col-sm-5">
                <label>Resume</label>
                <div class="custom-file">
                  <input type="file" name="resume" class="custom-file-input resume" accept=".pdf">
                  <label class="custom-file-label">Only pdf files are accepted</label>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-success">
              <span class="spinner-border spinner-border-sm loading"></span>
              <i class="fa fa-user-plus"></i>
              Register Applicant
            </button>
          </div>
        </form> 
      </div>
    </div>
  </div>
</div>

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
      url: "../recruitment/register.php",
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
<?php include "include/footer.php";?>