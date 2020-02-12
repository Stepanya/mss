<div class="modal fade" id="edit-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" id="update-form">
        <div class="modal-header bg-navy">
          <h4 class="modal-title">
            <i class="fa fa-edit"></i>
            Edit Branch
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-auto">
              <label>Branch Name</label>
              <input type="text" class="form-control branch" name="branch" required>
            </div>
            <div class="col-auto">
              <label>Branch Head</label>
              <input type="text" class="form-control branch-head" name="branch_head" required>
            </div>
          </div>
          <hr>
          <div class="row form-group">
            <div class="col-auto">
              <label>Zone Number</label>
              <input type="number" class="form-control contact zone-no" name="zone_no" required>
            </div>
            <div class="col-auto">
              <label>Zone Head</label>
              <input type="text" class="form-control zone-head" name="zone_head" required>
            </div>
          </div>
          <input type="hidden" name="id" id="update-id" />
          
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
            <span class="spinner-border spinner-border-sm loading"></span>
            Save changes
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
