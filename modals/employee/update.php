<div class="modal fade" id="edit-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form role="form" id="update-form">
        <div class="modal-header bg-navy">
          <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
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
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control email" placeholder="Enter email" name="email" required>
              </div>
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
            <div class="col-sm-12">
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
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <input type="number" class="form-control contact" placeholder="Enter mobile number" name="contact" required>
              </div>
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
          <input type="hidden" name="id" id="update-id" />
          
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
            <span class="spinner-border spinner-border-sm loading"></span>
            Save changes
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$('.gen-pass').click(function() {
  var code = "";
  var chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  for (var i = 0; i < 8; i++) 
      code += chars.charAt(Math.floor(Math.random() * chars.length));

  $('.password').val(code)
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
</script>