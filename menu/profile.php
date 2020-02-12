<?php 
include "include/header.php";
include "include/sidebar.php";
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="overlay table-spinner text-center">
              <img src="../assets/img/spinner.gif">
            </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="../AdminLTE/dist/img/avatar5.png" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center name"></h3>

              <p class="text-muted text-center p-position"></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Branch</b> <a class="float-right p-branch"></a>
                </li>
                <li class="list-group-item">
                  <b>Zone Number</b> <a class="float-right p-zone-no"></a>
                </li>
                <li class="list-group-item">
                  <b>Member Since</b> <a class="float-right p-hiredate"></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right p-email"></a>
                </li>
                <li class="list-group-item">
                  <b>Contact Number</b> <a class="float-right p-contact"></a>
                </li>
              </ul>

            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="overlay table-spinner text-center">
              <img src="../assets/img/spinner.gif">
            </div>
            <div class="card-header bg-navy">
              <h5><i class="fa fa-edit"></i> Edit Your Profile</h5>
            </div>
            <div class="card-body">
              <form id="update-form">
                <div class="row form-group">
                  <div class="col-sm-4">
                    <label>First Name</label>
                    <input type="text" class="form-control fname" placeholder="Enter first name" name="fname" required>
                  </div>
                  <div class="col-sm-4">
                    <label>Last Name</label>
                    <input type="text" class="form-control lname" placeholder="Enter last name" name="lname" required>
                  </div>
                  <div class="col-sm-2">
                    <label>M.I</label>
                    <input type="text" class="form-control mi" placeholder="Enter M.I" name="mi" required>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-sm-4">
                    <label>Email</label>
                    <input type="text" class="form-control email" placeholder="Enter email" name="email" required>
                  </div>
                  <div class="col-sm-8">
                    <label>Address</label>
                    <input type="text" class="form-control address" placeholder="Enter Address" name="address" required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-4">
                    <label>Gender</label>
                    <select class="form-control gender" name="gender"></select>
                  </div>
                  <div class="col-sm-4">
                    <label>Mobile Number</label>
                    <input type="number" class="form-control contact" placeholder="Enter mobile number" name="contact" required>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-sm-4">
                    <label>Birthdate</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                      <input type="date" name="birthdate" class="form-control birthdate">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label>Hire Date</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                      <input type="date" name="hiredate" class="form-control hiredate">
                    </div>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-3">
                    <label>Employment Status</label>
                    <select class="form-control emp-status" name="emp_status"></select>
                  </div>
                  <div class="col-sm-3">
                    <label>Position</label>
                    <select class="form-control position" name="position"></select>
                  </div>
                  <div class="col-sm-2">
                    <label>Zone Number</label>
                    <select class="form-control zone-no" name="zone_no"></select>
                  </div>
                  <div class="col-sm-3">
                    <label>Branch</label>
                    <select class="form-control branch" name="branch" required></select>
                  </div>
                </div>
                <input type="hidden" name="id" id="update-id" value="<?=$_SESSION['user_id']?>" />
                <button type="submit" class="btn btn-primary btn-block">
                  <span class="spinner-border spinner-border-sm loading"></span>
                  Save changes
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "include/footer.php";?>

<script>
var id = $('#update-id').val()
const loading = $('.loading')
loading.toggle()
$('.table-spinner').toggle()

loadForm()

function loadForm() {
  $('.table-spinner').toggle();
  setTimeout( function() { 
    $.ajax({
      url:"../employee/fetch_single.php",
      method:"POST",
      data:{ id:id },
      dataType:"json",
      success:function(data) {
        bindValues(data)
        $('.table-spinner').toggle();
      },
      error:function(e) {
        $('.table-spinner').toggle();
        toastError(e.responseText)
      }
    })
  }, 500)
}

$(document).on('submit', '#update-form', function(e) {
  e.preventDefault()
  loading.show()
  $.ajax({
    url:"../employee/update.php",
    method:'POST',
    data:new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    dataType:"json",
    success:function(data) {
      loading.hide()
      $('#update-form')[0].reset()
      toastSuccess(data)
      loadForm()
    },
    error:function(e) {
      loading.hide()
      toastError(e.responseText)
    }
  })
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
      $(".branch").html(data.branch)
    }
  })
})

function bindValues(data) {
  $('#update-id').val(data.Employee_Code)
  $('.fname').val(data.First_Name)
  $('.lname').val(data.Last_Name)
  $('.mi').val(data.Middle_Name)
  $('.email').val(data.Email)
  $('.address').val(data.Address)
  $('.gender').html(data.Gender)
  $('.contact').val(data.Contact)
  $('.birthdate').val(data.Birthday)
  $('.hiredate').val(data.Hire_Date)
  $('.emp-status').html(data.Status)
  $('.position').html(data.Position)
  $('.branch').html(data.Branch_Name)
  $('.zone-no').html(data.Zone_No)

  $('.name').text(data.name)
  $('.p-position').text(data.p_position)
  $('.p-branch').text(data.p_branch)
  $('.p-zone-no').text(data.p_zone)
  $('.p-hiredate').text(data.p_hiredate)
  $('.p-email').text(data.Email)
  $('.p-contact').text(data.Contact)
}

</script>
