<?php 
include "include/header.php";
include "include/sidebar.php";
?>
<!-- InputMask -->
<script src="../AdminLTE/plugins/inputmask/jquery.inputmask.bundle.js"></script>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sales Tracker</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Sales Tracker</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="card">
        <div class="overlay table-spinner text-center">
          <img src="../assets/img/spinner.gif">
        </div>
        <div class="card-header bg-navy text-center">
          <h5><i class="fa fa-shopping-cart"></i></h5>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-sm text-center">
            <thead class="bg-pastel">
              <th> Client Name </th>
              <th> Policy </th>
              <th> Payment Method </th>
              <th> Annual Premium </th>
              <th> Date Sold </th>
              <th> End Date </th>
              <th> Sold By </th>
              <th> Action </th>
            </thead>
            <tfoot class="bg-pastel">
              <tr>
                <td/>
                <td/>
                <td/>
                <td/>
                <td/>
                <td/>
                <td/>
                <td class="skip"/>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
include "../modals/sales/update.php"; 
include "../modals/sales/view.php";
include "include/footer.php";
?>

<script type="text/javascript">
const loading = $('.loading')
loading.toggle()

$('.select2').select2()
$('.amount, .total, .comm, .payment-by-plan').inputmask("currency", { radixPoint: "." })

setTimeout( function() { 
  $('.table').DataTable({
    lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
    ajax:{
      url:"../sales/fetch_list.php",
    },
    initComplete: function(settings, json) {
      this.api().columns().every( function () {
        var column = this;
        var select = $(`
          <select class="form-control form-control-sm select2">
            <option disbaled value>--Sort--</option>
          </select>
        `)

        .appendTo( $(column.footer()).empty() )
        .on( 'change', function () {
          var val = $.fn.dataTable.util.escapeRegex($(this).val())
          column
          .search( val ? '^'+val+'$' : '', true, false )
          .draw();
        })

        column.data().unique().sort().each( function ( d, j ) {
          select.append( '<option value="'+d+'">'+d+'</option>' )
        })
      })

      initTable()
    }
  })
}, 500)

$('.compute').click(function() {
  var amount = $('.amount').val().replace(/[^0-9.]/g, '')

  if (amount == 0.00)
    $('.amount').addClass('is-invalid')
  else
    $('.payment-by-plan').val(computeTotalAmount())

  setTimeout( function() {
    $('#update-form input').removeClass('is-invalid')
  }, 5000)
})

$(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  confirm("You won't be able to revert this").then((result) => {
    if (result.value) {
      $.ajax({
        url:"../sales/delete.php",
        method:"POST",
        data:{ id:id },
        dataType:"json",
        success:function(data) {
          toastSuccess(data)
          reloadTable()
        },
        error:function(e) {
          toastError(e.responseText)
        }
      })
    }
  })
})

$(document).on('click', '.view', function(){
  var id = $(this).attr("id")
  $.ajax({
    url:"../sales/fetch_single.php",
    method:"POST",
    data:{ id:id },
    dataType:"json",
    success:function(data) {
      $('#view-modal').modal('show')
      bindValuesView(data)
    },
    error:function(e) {
      toastError(e.responseText)
    }
  })
})

$(document).on('click', '.edit', function(){
  var id = $(this).attr('id')
  $.ajax({
    url:"../sales/fetch_single.php",
    method:"POST",
    data:{ id:id },
    dataType:"json",
    success:function(data) {
      $('#edit-modal').modal('show')
      bindValues(data)
    }
  })
})

$(document).on('submit', '#update-form', function(e) {
  e.preventDefault()
  loading.show()
  $.ajax({
    url:"../sales/update.php",
    method:'POST',
    data: $(this).serializeArray(),
    dataType:"json",
    success:function(data) {
      loading.hide()
      $('#update-form')[0].reset()
      $('#edit-modal').modal('hide')
      toastSuccess(data)
      reloadTable()
    },
    error:function(e) {
      loading.hide()
      toastError(e.responseText)
    }
  })
})

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

function bindValues(data) {
  $('#update-id').val(data.sales_id)
  $('.fname').val(data.client_first_name)
  $('.lname').val(data.client_last_name)
  $('.email').val(data.client_email)
  $('.contact').val(data.client_contact_number)
  $('.policy').html(data.e_policy)
  $('.plan').html(data.e_plan)
  $('.amount').val(data.payment_amount)
  $('.payment-by-plan').val(data.payment_per_plan)
  $('.sold').val(data.date_sold)
  $('.end').val(data.end_date)
}

function bindValuesView(data) {
  $('.fname').val(data.client_first_name)
  $('.lname').val(data.client_last_name)
  $('.email').val(data.client_email)
  $('.contact').val(data.client_contact_number)
  $('.sold-by').val(data.sold_by)
  $('.sold-by-name').text(data.sold_by+"'s Commission")
  $('.comm').val(data.commission_amount)
  $('.policy').val(data.policy_name)
  $('.plan').val(data.payment_plan)
  $('.amount').val(data.payment_amount)
  $('.payment-by-plan').val(data.payment_per_plan)
  $('.sold').val(data.v_date_sold)
  $('.end').val(data.v_end_date)
  $('.next-payment').val(data.v_next_payment)
}

</script>