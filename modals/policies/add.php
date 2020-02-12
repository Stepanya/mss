<div class="modal fade" id="add-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" id="add-form">
        <div class="modal-header bg-navy">
          <h4 class="modal-title">
            <i class="fa fa-plus"></i>
            Add Policy
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-sm-12">
              <label>Policy Name</label>
              <input type="text" class="form-control form-control-sm" name="policy" placeholder="Enter policy name" required>
            </div>
          </div>
          <hr>
          <div class="row form-group">
            <div class="col-sm-3">
              <label>Year 1 rate</label>
              <input type="number" class="form-control form-control-sm" name="yr1" placeholder="Enter rate" step=".01" required>
            </div>
            <div class="col-sm-3">
              <label>Year 2 rate</label>
              <input type="number" class="form-control form-control-sm" name="yr2" placeholder="Enter rate" step=".01" required>
            </div>
            <div class="col-sm-3">
              <label>Year 3 rate</label>
              <input type="number" class="form-control form-control-sm" name="yr3" placeholder="Enter rate" step=".01" required>
            </div>
            <div class="col-sm-3">
              <label>Year 4 rate</label>
              <input type="number" class="form-control form-control-sm" name="yr4" placeholder="Enter rate" step=".01" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-sm-3">
              <label>Year 5 rate</label>
              <input type="number" class="form-control form-control-sm" name="yr5" placeholder="Enter rate" step=".01" required>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">
            <span class="spinner-border spinner-border-sm loading"></span>
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
