<?php
$positions = $con->query("
  SELECT DISTINCT applying_for AS pos FROM tb_applicants
");
?>
<div class="modal fade" id="recruitment-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="POST" action="../reports/recruitment.php" target="_blank">
        <div class="modal-header bg-navy">
          <h4 class="modal-title">
            <i class="fa fa-clipboard"></i>
            Recruitment Report
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-sm-3">
              <label>Year</label>
              <select class="form-control form-control-sm" name="yr">
                <option value="">All Years</option>
                <?php for ($i = 2050; $i > 1998; $i--) { 
                  $s = ($i == date("Y")? "selected" : "");
                ?>
                  <option value="<?=$i?>" <?=$s?>><?=$i?></option>
                <?php }?>
              </select>
            </div>
            <div class="col-sm-3">
              <label>Month</label>
              <select class="form-control form-control-sm" name="month">
                <option value="">All Months</option>
                <?php 
                  $m = array('','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
                  for ($i = 1; $i <= 12; $i++) { 
                  $s = ($i == date("n")? "selected" : "");
                ?>
                  <option value="<?=$i?>" <?=$s?>><?=$m[$i]?></option>
                <?php }?>
              </select>
            </div>
            <div class="col-sm-3">
              <label>Day</label>
              <select class="form-control form-control-sm" name="day">
                <option value="">All Days</option>
                <?php for ($i = 1; $i <= 31; $i++) { 
                  $s = ($i == date("j")? "selected" : "");
                ?>
                  <option value="<?=$i?>" <?=$s?>><?=$i?></option>
                <?php }?>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-sm-6">
              <label>Sort By:</label>
              <select class="form-control form-control-sm" name="sort">
                <option value="first_name">First Name</option>
                <option value="last_name">Last Name</option>
                <option value="mi">Middle Initial</option>
                <option value="stage">Stage</option>
                <option value="email">Email</option>
                <option value="date_of_application">Application Date</option>
                <option value="interview_score">Interview Score</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label>Position:</label>
              <select class="form-control form-control-sm" name="pos">
                <option value="">All Positions</option>
                <?php while ($row = $positions->fetch_assoc()) {?>
                  <option value="<?=$row['pos']?>"><?=$row['pos']?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">
            <i class="fa fa-print"></i>
            Print
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
