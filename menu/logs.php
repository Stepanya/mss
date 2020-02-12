<?php 
include "include/header.php";
include "include/sidebar.php";
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Activity Logs</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Activity Logs</li>
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
            <i class="fa fa-book"></i>
          </h5>
	  		</div>
	  		<div class="card-body table-responsive">
	  			<table class="table table-striped table-bordered table-sm">
            <thead class="bg-pastel text-center">
	  					<th> Employee Code </th>
	  					<th> Name </th>
	  					<th> Position </th>
	  					<th> Action </th>
	  					<th> Timestamp </th>
	  					<th> Description </th>
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

<script type="text/javascript">
$(document).ready(function(){

  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href )
  }

  setTimeout( function() { 
    $('.table').DataTable({
      lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
      columnDefs: [ { type: 'date', 'targets': [4] } ],
      order: [[ 4, 'desc' ]],
      ajax:{
        url:"../activity_logs/fetch_logs.php",
      },
      initComplete: function() {
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
})


</script>

<?php include "include/footer.php";?>