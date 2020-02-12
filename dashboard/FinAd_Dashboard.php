<?php
include "include/header.php";
include "include/sidebar.php";

$year = date('Y');

?>
<!-- Chart JS -->
<script src="../AdminLTE/plugins/chart.js/Chart.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="../AdminLTE/plugins/select2/css/select2.min.css">
<!-- Select2 -->
<script src="../AdminLTE/plugins/select2/js/select2.full.min.js"></script>

<div class="content-wrapper mt-0">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="row">
      <div class="col-lg-6">
        <div class="info-box">
          <div class="overlay dark boxes">
            <div class="spinner-border text-light"></div>
          </div>
          <span class="info-box-icon bg-info"><i class="fa fa-shopping-cart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total sales in <?=$year;?></span>
            <span class="info-box-number text-center total-sales"></span>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="info-box">
          <div class="overlay dark boxes">
            <div class="spinner-border text-light"></div>
          </div>
          <span class="info-box-icon bg-olive"><i class="fa fa-money"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Your total commission</span>
            <span class="info-box-number total-comms"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="row">

    <section class="col-lg-6">
      <!-- ************************* -->
      <!--         SALES -->
      <!-- ************************* -->
      <div class="card ml-2">
        <div class="overlay dark sales-spinner">
          <div class="spinner-border text-light"></div>
        </div>
        <div class="card-header bg-navy">
          <h5 class="m-0"><i class="fa fa-bar-chart"></i> Sales Chart</h5>
        </div>
        <div class="card-body p-1">
          <form class="form-inline sales-form">
            <div class="form-group m-2">
              <select id="sales-years" name="year" class="form-control form-control-sm" required></select>
            </div>
            <div class="form-group m-2">
              <select id="policies" name="policy" class="form-control form-control-sm select2" required></select>
            </div>
            <input type="hidden" name="employee" value="<?=$id?>">
            <button class="btn btn-success btn-sm">Go</button>
          </form>


          <b id="total-sales"></b>
          <canvas id="sales-chart" width="100%" height="50"></canvas>  
        </div>
      </div>
    </section>
    <section class="col-lg-6">
      <!-- ************************* -->
      <!--        COMMISSIONS -->
      <!-- ************************* -->

      <div class="card mr-2">
        <div class="overlay dark comm-spinner">
          <div class="spinner-border text-light"></div>
        </div>
        <div class="card-header bg-navy">
          <h5 class="m-0"><i class="fa fa-bar-chart"></i> Commissions Chart</h5>
        </div>
        <div class="card-body p-1">
          <form class="form-inline commission-form">
            <div class="form-group m-2">
              <select id="comm-years" name="year" class="form-control form-control-sm" required></select>
            </div>
            <div class="form-group m-2">
              <select id="months" name="month" class="form-control form-control-sm" required></select>
            </div>
            <input type="hidden" name="employee" value="<?=$id?>">
            <button class="btn btn-success btn-sm">Go</button>
          </form>
          <canvas id="commission-chart" width="100%" height="50"></canvas>

          <div class='table-responsive text-center'>
            <table class='table table-hover table-striped table-sm small comms'>
              <thead class="bg-pastel">
                <th>Sale Date</th>
                <th>Expected Commission Date</th>
                <th>Expected Commission Amount</th>
                <th>Policy</th>
                <th>Payment Plan</th>
                <th>Payment Amount</th>
                <th>Annual Amount</th>
              </thead>
              <tfoot class="bg-pastel">
                <th class="total" colspan="7"></th>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </section> 
  </div>
</div>

<style>
  .select2-container {
    width: 300px!important;
  }
</style>

<script>
var datatable = $('.comms').DataTable({
  responsive: true
})

$('.select2').select2()
  
setTimeout( function() {
  $.ajax({
    url:"../dashboard/fetch_boxes.php",
    method:"GET",
    dataType:"json",
    success:function(data) {
      setBoxes(data)
      $('.boxes').fadeOut('slow')
    },
    error:function(e) {
      toastError(e.responseText)
    }
  })
}, 500)

var salesChart = $('#sales-chart').get(0).getContext('2d')
var commissionChart = $('#commission-chart').get(0).getContext('2d')
// SALES CHART

setTimeout( function() {
  $.ajax({
    url:"../dashboard/fetch_sales.php",
    method: "POST",
    data: {
      policy: "all",
      employee: "<?=$id?>",
      year: "<?=$year?>"
    },
    dataType:"json",
    success:function(data) {
      renderSalesChart(data, salesChart)
      
      $('#sales-years').html(data.years)
      $('#policies').html(data.policies)

      $('.sales-spinner').fadeOut('slow')
    },
    error:function(e) {
      toastError(e.responseText)
      $('.sales-spinner').fadeOut('slow')
    }
  })
}, 500)

$('.sales-form').submit(function(e) {
  e.preventDefault()
  $('.sales-spinner').fadeIn('slow')
  $.ajax({
    url:"../dashboard/fetch_sales.php",
    method: "POST",
    dataType:"json",
    data: $(this).serializeArray(),
    success:function(data) {
      renderSalesChart(data, salesChart)
      $('.sales-spinner').fadeOut('slow')
    },
    error:function(e) {
      toastError(e.responseText)
      $('.comm-spinner').fadeOut('slow')
    }
  })
})

// COMMISSIONS CHART
setTimeout( function() {
  $.ajax({
    url:"../dashboard/fetch_commissions.php",
    dataType:"json",
    method: "POST",
    data: {
      employee: "<?=$id?>",
      year: "<?=$year?>",
      month: "<?=date('M')?>"
    },
    success:function(data) {
      renderCommissionChart(data, commissionChart)
      $('#comm-years').html(data.years)
      $('#months').html(data.months)
      $('#comm-employees').html(data.employees)
      redrawTable(data.table)
      $('.total').html(data.box)

      $('.comm-spinner').fadeOut('slow')
    },
    error:function(e) {
      toastError(e.responseText)
      $('.comm-spinner').fadeOut('slow')
    }
  })
}, 500)

$('.commission-form').submit(function(e) {
  e.preventDefault()
  $('.comm-spinner').fadeIn('slow')
  $.ajax({
    url:"../dashboard/fetch_commissions.php",
    method: "POST",
    dataType:"json",
    data: $(this).serializeArray(),
    success:function(data) {
      renderCommissionChart(data, commissionChart)
      redrawTable(data.table)
      $('.total').html(data.box)

      $('.comm-spinner').fadeOut('slow')
    },
    error:function(e) {
      toastError(e.responseText)
      $('.comm-spinner').fadeOut('slow')
    }
  })
})

function renderSalesChart(data, salesChart) {

  new Chart(salesChart, {
    type: 'bar',
    data: {
      labels: data.months,
      datasets: [{
        label: data.legend,
        data: data.data,
        backgroundColor: ['rgba(0, 31, 63, 0.7)'],
        borderColor: ['rgb(0, 31, 63)'],
        borderWidth: 1
      }]
    }
  })
}

function renderCommissionChart (data, commissionChart) {

  new Chart(commissionChart, {
    type: 'bar',
    data: {
      labels: data.days,
      datasets: [{
        label: data.legend,
        data: data.data,
        backgroundColor: ['rgba(0, 31, 63, 0.7)'],
        borderColor: ['rgb(0, 31, 63)'],
        borderWidth: 1
      }]
    }
  })
}

function redrawTable(data) {
  datatable.clear().draw();
  datatable.rows.add(data);
  datatable.columns.adjust().draw()
}

function setBoxes(data) {
  $('.total-sales').text(data.sales)
  $('.total-comms').html(data.comm)
}
</script>
<?php include "include/footer.php"; ?>


