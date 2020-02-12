<?php 
include "include/header.php";
include "include/sidebar.php";
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Employee List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Employee List</li>
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
          <h5>
            <i class="fa fa-users"></i>
          </h5>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-sm text-center">
            <thead class="bg-pastel">
              <th> Employee Code </th>
              <th> Name </th>
              <th> Email </th>
              <th> Branch </th>
              <th> Zone </th>
              <th> Position </th>
              <th> Action </th>
            </thead>
            <tfoot class="bg-pastel text-center">
              <tr>
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

<style>
  .select2-container {
    font-size: small;
  }
</style>

<?php 
include "../modals/employee/update.php"; 
include "../modals/employee/view.php";
?>

<script type="text/javascript">
const loading = $('.loading')
loading.toggle()

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href )
}

setTimeout( function() { 
  $('.table').DataTable({
    lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
    ajax:{
        url:"../employee/fetch_list.php",
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

$(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  confirm("You won't be able to revert this").then((result) => {
    if (result.value) {
      $.ajax({
        url:"../employee/delete.php",
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
    url:"../employee/fetch_single.php",
    method:"GET",
    data:{ id:id },
    dataType:"json",
    success:function(data) {
      $('#view-modal').modal('show')
      bindValuesView(data)
    }
  })
})

$(document).on('click', '.edit', function(){
  var id = $(this).attr('id')
  $.ajax({
    url:"../employee/fetch_single.php",
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
}
function bindValuesView(data) {
  $('.emp-code').val(data.Employee_Code)
  $('.fname').val(data.First_Name)
  $('.lname').val(data.Last_Name)
  $('.mi').val(data.Middle_Name)
  $('.email').val(data.Email)
  $('.address').val(data.Address)
  $('.gender').val(data.Gender)
  $('.contact').val(data.Contact)
  $('.birthdate').val(data.Birthday)
  $('.hiredate').val(data.Hire_Date)
  $('.emp-status').val(data.Status)
  $('.position').val(data.Position)
  $('.branch').val(data.Branch_Name)
  $('.zone-no').val(data.Zone_No)
}
</script>

<?php include "include/footer.php";?>