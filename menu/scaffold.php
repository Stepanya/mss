<?php 
include "include/header.php";
include "include/sidebar.php";
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Route</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Route</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="card">
        <!-- <div class="overlay table-spinner text-center">
          <img src="../assets/img/spinner.gif">
        </div> -->
        <div class="card-header bg-navy text-center">
          <h5><i class="fa fa-users"></i></h5>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-sm">
            <thead class="bg-pastel text-center">

            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
// include "../modals/FOLDER/update.php"; 
// include "../modals/FOLDER/view.php";
// include "include/footer.php";
?>

<script type="text/javascript">
const loading = $('.loading')
loading.toggle()

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href )
}

// setTimeout( function() { 
//     $('.table').DataTable({
//       lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
//       ajax:{
//           url:"../FOLDER/fetch_list.php",
//       },
//       initComplete: function(settings, json) {
//           initPopover()
//           $('.table-spinner').toggle()
//       }
//     })
// }, 500)

$(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  confirm("You won't be able to revert this").then((result) => {
    if (result.value) {
      $.ajax({
        url:"../FOLDER/delete.php",
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
    url:"../FOLDER/fetch_single.php",
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
    url:"../FOLDER/fetch_single.php",
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
    url:"../FOLDER/update.php",
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
  $('#update-id').val(data.applicant_id)
  $('.fname').val(data.first_name)
  $('.lname').val(data.last_name)
  $('.mi').val(data.mi)
  $('.email').val(data.email)
  $('.contact').val(data.contact_no)
  $('.position').val(data.applying_for)
  $('.date').val(data.date_of_application)
  $('.score').val(data.interview_score)
  $('.stage').html(data.e_stage)
  $('.notes').val(data.interview_notes)
  $('.reason').val(data.why_work)
}

</script>