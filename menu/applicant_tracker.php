<?php 
include "include/header.php";
include "include/sidebar.php";
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Applicant Tracker</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Applicant Tracker</li>
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
          <h5><i class="fa fa-users"></i></h5>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-sm text-center recruitment-table">
            <thead class="bg-pastel">
              <th> Applicant ID </th>
              <th> Name </th>
              <th> Stage </th>
              <th> Position Applied </th>
              <th> Application Date </th>
              <th> Action </th>
            </thead>
            <tfoot class="bg-pastel">
              <tr>
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
include "../modals/recruitment/update.php"; 
include "../modals/recruitment/view.php";
include "include/footer.php";
?>

<script type="text/javascript">
const loading = $('.loading')
loading.toggle()

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href )
}

setTimeout( function() { 
  $('.recruitment-table').DataTable({
    lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
    ajax:{
        url:"../recruitment/fetch_list.php",
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
        url:"../recruitment/delete.php",
        method:"POST",
        data:{ id:id },
        dataType:"json",
        success:function(data) {
          toastSuccess(data)
          $('.recruitment-table').DataTable().ajax.reload()
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
    url:"../recruitment/fetch_single.php",
    method:"POST",
    data:{ id:id },
    dataType:"json",
    success:function(data) {
      $('#view-modal').modal('show')
      bindValuesView(data)
      $('.tracker-table').DataTable().destroy()
      $('.tracker-table').DataTable({
        data: data.tracker,
        searching: false,
        info: false,
        lengthChange: false,
        ordering: false,
        paging: false
      })
    },
    error:function(e) {
      toastError(e.responseText)
    }
  })
})

$(document).on('click', '.edit', function(){
  var id = $(this).attr('id')
  $.ajax({
    url:"../recruitment/fetch_single.php",
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
    url:"../recruitment/update.php",
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
      $('.recruitment-table').DataTable().ajax.reload()
    },
    error:function(e) {
      loading.hide()
      toastError(e.responseText)
    }
  })
})

function bindValues(data) {
  $('#update-id').val(data.applicant_id)
  $('.fname').val(data.first_name)
  $('.lname').val(data.last_name)
  $('.mi').val(data.mi)
  $('.email').val(data.email)
  $('.contact').val(data.contact_no)
  $('.position').val(data.applying_for)
  $('.date').val(data.date_of_application)
  $('.stage').val(data.stage)
  $('.reason').val(data.why_work)
  $('.status').html(data.status)
}
function bindValuesView(data) {
  $('.fname').val(data.first_name)
  $('.lname').val(data.last_name)
  $('.mi').val(data.mi)
  $('.email').val(data.email)
  $('.contact').val(data.contact_no)
  $('.position').val(data.applying_for)
  $('.date').val(data.date)
  $('.stage').val(data.stage)
  $('.reason').val(data.why_work)
  $('.resume').attr('data',data.resume)
}
</script>