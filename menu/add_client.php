<?php 
include "include/header.php";
include "include/sidebar.php";

$result  = $con->query("SELECT policy_name, policy_id FROM tb_policies");
?>
<!-- Select2 -->
<link rel="stylesheet" href="../AdminLTE/plugins/select2/css/select2.min.css">
<!-- Select2 -->
<script src="../AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../AdminLTE/plugins/inputmask/jquery.inputmask.bundle.js"></script>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add Client</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Add Client</li>
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
        <form class="add-form">
          <div class="card-body">
            <div class="row form-group">
              <div class="col-sm-6">
                <label>First Name</label>
                <input name="fname" class="form-control fname" placeholder="Enter first name">
              </div>
              <div class="col-sm-6">
                <label>Last Name</label>
                <input name="lname" class="form-control lname" placeholder="Enter last name">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-3">
                <label>Email</label>
                <input name="email" class="form-control email" placeholder="Enter email">
              </div>
              <div class="col-sm-3">
                <label>Contact Number</label>
                <input type="number" name="contact" class="form-control contact" placeholder="Enter contact number">
              </div>
              <div class="col-sm-6">
                <label>Policy</label>
                <select name="policy" class="form-control select2 policy">
                  <option selected disabled>--Select Policy--</option>
                  <?php while ($row = $result->fetch_assoc()) {?>
                    <option value="<?=$row['policy_id']?>"><?=$row['policy_name']?></option>
                  <?php }?>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-3">
                <label>Annual Premium</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">&#8369;</span>
                  </div>
                  <input type="text" name="amount" class="form-control amount" placeholder="Enter insured amount">
                </div>
              </div>
              <div class="col-sm-3">
                <label>Payment Method</label>
                <select class="form-control plan" name="plan">
                  <option disabled selected>--Select payment method--</option>
                  <option value="Monthly">Monthly</option>
                  <option value="Quarterly">Quarterly</option>
                  <option value="Semi-annual">Semi-annual</option>
                  <option value="Annual">Annual</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label>Payment By Method Amount</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-info btn-sm compute">Compute Amount</button>
                  </div>
                  <input name="total" class="form-control total" readonly>
                  <div class="input-group-append">
                    <span class="input-group-text">&#8369;</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-auto">
                <label>Date Sold</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="date" name="sold" class="form-control sold">
                </div>
              </div>
              <div class="col-auto">
                <label>End Date</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="date" name="end" class="form-control end" readonly>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-success">
              <span class="spinner-border spinner-border-sm loading"></span>
              <i class="fa fa-user-plus"></i>
              Add Client
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$('.select2').select2()
$('.amount, .total').inputmask("currency", { radixPoint: "." })

const loading = $('.loading')
loading.toggle()

$('.add-form').submit(function(e) {
  e.preventDefault()
  if (validateForm($(this))) {
    loading.show()
    $.ajax ({
      type: "POST",
      dataType: "json",
      data: $(this).serializeArray(),
      url: "../sales/add_client.php",
      success: function(response) {
        loading.hide()
        toastSuccess(response)
        $('.add-form').trigger("reset")
      },
      error: function(e) {
        loading.hide()
        toastError(e.responseText)
      }
    })
  }
})

$('.compute').click(function() {
  if ($('.amount').val() == "") {
    $('.amount').addClass('is-invalid')
    toastError("Please enter insured amount first")
  } else if (!$('.plan').val()) {
     $('.plan').addClass('is-invalid')
    toastError("Please select payment plan first")
  } else 
    $('.total').val(computeTotalAmount()) 

  removeError()
})

$('.sold').on('change',function(){
    var date = new Date($(this).val())
    var year = date.getFullYear() + 5
    var month = ('0' + date.getMonth()).slice(-2)
    var day = ('0' + date.getDate()).slice(-2)
    $('.end').val(year +'-'+month+'-'+day)
});

function validateForm(form) {
  var data = form.serializeArray().reduce(function(obj, item) {
      obj[item.name] = item.value;
      return obj;
  }, {});

  if (data.fname == "") 
    $('.fname').addClass('is-invalid') 
  if (data.lname == "") 
    $('.lname').addClass('is-invalid')
  if (data.email == "") 
    $('.email').addClass('is-invalid')
  if (data.contact == "") 
    $('.contact').addClass('is-invalid')
  if (!data.policy)
    $('.policy').addClass('is-invalid')
  if (data.amount == "") 
    $('.amount').addClass('is-invalid')
  if (!data.plan) 
    $('.plan').addClass('is-invalid')
  if (data.total == "") 
    $('.total').addClass('is-invalid')
  if (data.sold == "") 
    $('.sold').addClass('is-invalid')
  if (data.end == "") 
    $('.end').addClass('is-invalid')

  removeError()

  if ($('.add-form input, .add-form select').hasClass('is-invalid')) {
    toastError("Please fill out all required fields.")
    return false
  } else 
    return true
}

function removeError() {
  setTimeout( function() {
    $('.add-form input, .add-form select').removeClass('is-invalid')
  }, 5000)
}

 function computeTotalAmount() {
    var amount = $('.amount').val().replace(/[^0-9.]/g, '')
    var plan = $('.plan').val();

    if (plan == "Monthly") 
      plan = 12
    else if (plan == "Quarterly")
      plan = 4
    else if (plan == "Semi-annual")
      plan = 2
    else if (plan == "Annual")
      plan = 1

    var plan = plan * 5
    return amount / plan
}
</script>

<?php include "include/footer.php";?>