<?php
    $policies = $con->query("
      SELECT 
        policy_name AS pol,
        policy_id AS id
      FROM 
        tb_policies
    ");
    $employees = $con->query("
      SELECT 
        DISTINCT CONCAT(u.First_Name, ' ', u.Middle_Name, ' ', u.Last_Name) AS emp,
        u.Employee_Code AS code
      FROM 
        tb_sales AS s
      JOIN 
        tb_users AS u
      ON 
        s.employee_code = u.employee_code
    ");
?>
<div class="modal fade" id="sales-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-navy">
          <h4 class="modal-title">
            <i class="fa fa-clipboard"></i>
            Sales Report
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="../reports/sales.php" target="_blank">
            <h6>Sales</h6>
            <div class="row form-group">
              <div class="col-sm-7">
                <label>Policy:</label>
                <select class="form-control form-control-sm" name="policy">
                  <option value="">All Policies</option>
                  <?php while($row = $policies->fetch_assoc()) { ?>
                    <option value="<?=$row['id']?>"><?=$row['pol']?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-sm-5">
                <label>Payment Method:</label>
                <select class="form-control form-control-sm" name="plan">
                  <option value="">All Payment Methods</option>
                  <option value="Monthly">Monthly</option>
                  <option value="Quarterly">Quarterly</option>
                  <option value="Semi-annual">Semi-annual</option>
                  <option value="Annual">Annual</option>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-12">
                <label>Annual Premium</label>
                <input class="amount-range" name="amount">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-12">
                <label>Payment Per Method</label>
                <input class="method-range" name="method">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4">
                <label>Date Sold Year:</label>
                <select class="form-control form-control-sm" name="yr">
                  <option value="" selected>All Years</option>
                  <?php for ($i = 2050; $i > 1998; $i--) { ?>
                    <option value="<?=$i?>"><?=$i?></option>
                  <?php }?>
                </select>
              </div>
              <div class="col-sm-4">
                <label>Date Sold Month:</label>
                <select class="form-control form-control-sm" name="month">
                  <option value="" selected>All Months</option>
                  <?php 
                    $m = array('','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
                    for ($i = 1; $i <= 12; $i++) { 
                  ?>
                    <option value="<?=$i?>"><?=$m[$i]?></option>
                  <?php }?>
                </select>
              </div>
              <div class="col-sm-4">
                <label>Date Sold Day</label>
                <select class="form-control form-control-sm" name="day">
                  <option value="" selected>All Days</option>
                  <?php for ($i = 1; $i <= 31; $i++) { ?>
                    <option value="<?=$i?>" <?=$s?>><?=$i?></option>
                  <?php }?>
                </select>
              </div>
            </div>
            <?php if ($position == "Financial Adviser") {?>
              <input type="hidden" name="emp" value="<?=$id?>">
            <?php } else { ?>
              <div class="row form-group">
                <div class="col-sm-12">
                  <label>Sold By:</label>
                  <select class="form-control form-control-sm" name="emp">
                    <option value="">All Employees</option>
                    <?php while ($row = $employees->fetch_assoc()) {?>
                      <option value="<?=$row['code']?>"><?=$row['emp']?></option>
                    <?php } ?>
                  </select> 
                </div>
              </div>
            <?php } ?>
            <div class="row form-group">
              <div class="col-sm-6">
                <label>Sort By:</label>
                <select class="form-control form-control-sm" name="sort">
                  <option value="client_first_name">First Name</option>
                  <option value="client_last_name">Last Name</option>
                  <option value="client_email">Middle Name</option>
                  <option value="policy_name">Policy Name</option>
                  <option value="payment_amount">Annual Premium</option>
                  <option value="payment_per_plan">Payment Per Plan</option>
                  <option value="date_sold">Date Sold</option>
                  <option value="end_date">End Date</option>
                  <option value="next_payment_date">Next Payment Date</option>
                  <option value="First_Name">Employee First Name</option>
                  <option value="Last_Name">Employee Last Name</option>
                </select>
              </div>
            </div>
            <div class="float-right">
              <button type="submit" class="btn btn-success btn-sm">
                <i class="fa fa-print"></i>
                Print
              </button>
            </div>
          </form>
          <form role="form" method="POST" action="../reports/policies.php" target="_blank">
            <h6>Policies</h6>
            <div class="row form-group">
              <div class="col-sm-4">
                <label>Sort By:</label>
                <select class="form-control form-control-sm" name="sort">
                  <option value="policy_name">Policy Name</option>
                  <option value="policy_id">Policy ID</option>
                </select>
              </div>
              <div class="col-sm-4">
                <label>Order:</label>
                <select class="form-control form-control-sm" name="order">
                  <option value="ASC">Ascending</option>
                  <option value="DESC">Descending</option>
                </select>
              </div>
            </div>
            <div class="float-right">
              <button type="submit" class="btn btn-success btn-sm">
                <i class="fa fa-print"></i>
                Print
              </button>
            </div>
          </form>
        </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
$('.amount-range').ionRangeSlider({
  skin: 'round',
  type: "double",
  prefix: "₱",
  from: 0,
  to: 0,
  min: 0,
  max: 10000000,
  step: 5000,
  prettify_enabled: true,
  prettify_separator: ","
})
$('.method-range').ionRangeSlider({
  skin: 'round',
  type: "double",
  prefix: "₱",
  from: 0,
  to: 0,
  min: 0,
  max: 10000000,
  step: 5000,
  prettify_enabled: true,
  prettify_separator: ","
})
</script>