<?php 
include "include/header.php";
include "include/sidebar.php";
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Policy Management</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Policy Management</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="card card-primary card-outline">
        <div class="overlay table-spinner text-center">
          <img src="../assets/img/spinner.gif">
        </div>
        <div class="card-header p-2">
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-modal">
            <i class="fa fa-plus"></i>
            Add Policy
          </button>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-sm">
            <thead class="bg-pastel">
              <th> Policy ID </th>
              <th> Policy Name </th>
              <th> Year 1 Rate </th>
              <th> Year 2 Rate </th>
              <th> Year 3 Rate </th>
              <th> Year 4 Rate </th>
              <th> Year 5 Rate </th>
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
                <td class="skip" />
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
include "../modals/policies/update.php";
include "../modals/policies/add.php";
?>

<script>
const loading = $('.loading')
loading.toggle()

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href )
}

setTimeout( function() { 
  $('.table').DataTable({
    lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
    ajax:{
        url:"../policies/fetch_list.php",
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
        url:"../policies/delete.php",
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

$(document).on('click', '.edit', function(){
  var id = $(this).attr('id')
  $('#edit-modal').modal('show')
  $.ajax({
    url:"../policies/fetch_single.php",
    method:"POST",
    data:{ id:id },
    dataType:"json",
    success:function(data) {
      $('#edit-modal').modal('show')
      bindValues(data)
    }
  })
})

$(document).on('submit', '#add-form', function(e) {
  e.preventDefault()
  loading.show()
  $.ajax({
    url:"../policies/add.php",
    method:'POST',
    data: $(this).serializeArray(),
    dataType:"json",
    success:function(data) {
      loading.hide()
      $('#add-form')[0].reset()
      $('#add-modal').modal('hide')
      toastSuccess(data)
      reloadTable()
    },
    error:function(e) {
      loading.hide()
      toastError(e.responseText)
    }
  })
})

$(document).on('submit', '#update-form', function(e) {
  e.preventDefault()
  loading.show()
  $.ajax({
    url:"../policies/update.php",
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

function bindValues(data) {
  $('#update-id').val(data.policy_id)
  $('.policy').val(data.policy_name)
  $('.yr1').val(data.comm_rate_yr1)
  $('.yr2').val(data.comm_rate_yr2)
  $('.yr3').val(data.comm_rate_yr3)
  $('.yr4').val(data.comm_rate_yr4)
  $('.yr5').val(data.comm_rate_yr5)
}
</script>

<?php include "include/footer.php";?>