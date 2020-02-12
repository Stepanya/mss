<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Announcements</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Announcements</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
  	<div class="container-fluid p-1">
      <div class="card collapsed-card">
        <div class="card-header bg-navy">
          <h5 class="card-title">
            <i class="fa fa-calendar-plus-o"></i>
            Post Announcement
          </h5>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse">
              <i class="fa fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form id="announcement-form">
            <div class="form-group">
              <label>Subject</label>
              <input type="text" class="form-control" name="subject" placeholder="Enter subject" required>
            </div>
            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control summernote" rows="10" name="message" placeholder="Enter Message" required></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-block">
              <span class="spinner-border spinner-border-sm loading"></span>
              Post Announcement
            </button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="overlay table-spinner text-center">
          <img src="../assets/img/spinner.gif">
        </div>
        <div class="card-header bg-navy">
          <h5 class="card-title">
            <i class="fa fa-list"></i> Announcements
          </h5>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-sm text-center">
            <thead class="bg-pastel">
              <th> Posted By </th>
              <th> Position </th>
              <th> Subject </th>
              <th> Date Posted </th>
              <th> Actions </th>
            </thead>
            <tfoot class="bg-pastel text-center">
              <th/>
              <th/>
              <th/>
              <th/>
              <th class="skip"/>
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

<?php include "../modals/announcements/update.php" ?>
<!-- summernote -->
<link rel="stylesheet" href="../AdminLTE/plugins/summernote/summernote-bs4.css">
<!-- Summernote -->
<script src="../AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>

<script>
const loading = $('.loading')
loading.toggle()

$('.summernote').summernote({height: 200})

setTimeout( function() { 
  $('.table').DataTable({
    lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
    ajax:{
      url:"../announcements/fetch_list.php",
      type:"GET"
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

$('#announcement-form').submit(function(e) {
  e.preventDefault()
  loading.show()

  var form = $('#announcement-form')
  var formdata = form.serializeArray().reduce(function(obj, item) {
      obj[item.name] = item.value
      return obj
  }, {})

  $.ajax({
    url:"../announcements/post.php",
    method:"POST",
    data: formdata,
    dataType:"json",
    success: function(data) {
      $('.summernote').summernote("reset")
      initPopover()
      reloadTable()
      loading.hide()
      toastSuccess(data)
    },
    error:function(e) {
      loading.hide()
      toastSuccess(e.responseText)
    }
  })

  form.trigger('reset')
})

$(document).on('submit', '#update-form', function(e) {
  e.preventDefault()
  $.ajax({
    url:"../announcements/update.php",
    method:'POST',
    data:new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    dataType:"json",
    success:function(data) {
      $('#update-form')[0].reset()
      $('#edit-modal').modal('hide')
      toastSuccess(data)
      reloadTable()
      initPopover()
    },
    error:function(e) {
      toastError(e.responseText)
    }
  })
})

$(document).on('click', '.delete', function(){
  var id = $(this).attr("id")
  confirm("You won't be able to revert this").then((result) => {
    if (result.value) {
      $.ajax({
        url:"../announcements/delete.php",
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
  var id = $(this).attr("id")
  $.ajax({
    url:"../announcements/fetch_single.php",
    method:"POST",
    data:{ id:id },
    dataType:"json",
    success:function(data) {
      $('#edit-modal').modal('show')
      $('#subject').val(data.subject)
      $('#message').summernote('code', data.message)
      $('#update-id').val(data.id)
    }
  })
})
</script>
