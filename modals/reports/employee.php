<div class="modal fade" id="employee-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="POST" action="../reports/employee.php" target="_blank">
        <div class="modal-header bg-navy">
          <h4 class="modal-title">
            <i class="fa fa-clipboard"></i>
            Employee Report
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-sm-6">
              <label>Position</label>
              <select class="form-control form-control-sm" name="pos">
                <option value="">All Positions</option>
                <option value="Financial Adviser">Financial Adviser</option>
                <option value="Unit Manager">Unit Manager</option>
                <option value="Branch Head">Branch Head</option>
                <option value="Zone Head">Zone Head</option>
              </select>
            </div>
            <div class="col-sm-3">
              <label>Gender</label>
              <select class="form-control form-control-sm" name="gen">
                <option value="">All Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="col-sm-3">
              <label>Status</label>
              <select class="form-control form-control-sm" name="stat">
                <option value="">All Status</option>
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Casual">Casual</option>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-sm-4">
              <label>Sort By:</label>
              <select class="form-control form-control-sm" name="sort">
                <option value="First_Name">First Name</option>
                <option value="Last_Name">Last Name</option>
                <option value="Middle_Name">Middle Name</option>
                <option value="Email">Email</option>
                <option value="Birthday">Birthdate</option>
                <option value="Hire_Date">Hire Date</option>
              </select>
            </div>
            <div class="col-sm-4">
              <label>Zone No:</label>
              <select class="form-control form-control-sm zone" name="zone">
                <option value="">All Zones</option>
              </select>
            </div>
            <div class="col-sm-4">
              <label>Branch:</label>
              <select class="form-control form-control-sm branch-report" name="branch">
                <option value="">All Branch</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">
            <i class="fa fa-print"></i>
            Print
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
$.ajax ({
  type: "POST",
  url: "../employee/registration/get_zone.php",
  success: function(html) {
    $(".zone").append(html)
  }
})

$('.zone').change(function() {
  var id = $(this).val()
  $.ajax ({
    type: "POST",
    dataType: "json",
    url: "../employee/registration/get_zone_branch.php",
    data: {id:id},
    cache: false,
    success: function(data) {
      $(".branch-report").html(data.branch)
    }
  })
})
</script>