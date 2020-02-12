<div class="modal fade" id="edit-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form role="form" id="update-form">
        <div class="modal-header bg-navy">
          <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Applicant</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-sm-5">
              <label>First Name</label>
              <input name="fname" class="form-control form-control-sm fname">
            </div>
            <div class="col-sm-5">
              <label>Last Name</label>
              <input name="lname" class="form-control form-control-sm lname">
            </div>
            <div class="col-sm-2">
              <label>M.I</label>
              <input name="mi" class="form-control form-control-sm mi">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-sm-4">
              <label>Email</label>
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="email" name="email" class="form-control form-control-sm email">
              </div>
            </div>
            <div class="col-sm-4">
              <label>Contact No.</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <input name="contact" class="form-control form-control-sm contact">
              </div>
            </div>
            <div class="col-sm-4">
              <label>Position Applied</label>
              <input name="position" class="form-control form-control-sm position">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-sm-4">
              <label>Interview Date</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input type="date" name="date" class="form-control form-control-sm date">
              </div>
            </div>
            <div class="col-sm-3">
              <label>Stage</label>
              <input name="stage" class="form-control form-control-sm stage" readonly="">
            </div>
            <div class="col-sm-3">
              <label>Status</label>
              <select name="status" class="form-control form-control-sm status"></select>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-sm-6">
              <label>Resume</label>
              <div class="custom-file">
                <input type="file" name="resume" class="custom-file-input" accept=".pdf">
                <label class="custom-file-label">Only pdf files are accepted</label>
                <div class="invalid-tooltip">
                  Please select resume
                </div>
              </div>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-sm-12">
              <label>Why do you want to work with us?</label>
              <textarea rows="2" name="reason" class="form-control form-control-sm reason"></textarea>
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