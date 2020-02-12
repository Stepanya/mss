<div class="modal fade" id="add-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" id="add-form">
        <div class="modal-header bg-navy">
          <h4 class="modal-title">
            <i class="fa fa-plus"></i>
            Add Branch
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-auto">
              <label>Branch Name</label>
              <input type="text" class="form-control" name="branch" placeholder="Enter branch name" required>
            </div>
            <div class="col-auto">
              <label>Branch Head</label>
              <input type="text" class="form-control" name="branch_head" placeholder="Enter branch head" required>
            </div>
          </div>
          <hr>
          <div class="row form-group">
            <div class="col-auto">
              <label>Zone Number</label>
              <input type="number" class="form-control" name="zone_no" placeholder="Enter zone number" required>
            </div>
            <div class="col-auto">
              <label>Zone Head</label>
              <input type="text" class="form-control" name="zone_head" placeholder="Enter zone head" required>
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
