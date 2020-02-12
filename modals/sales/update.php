<div class="modal fade" id="edit-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" id="update-form">
        <div class="modal-header bg-navy">
          <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Client</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-sm-6">
              <label>First Name</label>
              <input name="fname" class="form-control form-control-sm fname" required>
            </div>
            <div class="col-sm-6">
              <label>Last Name</label>
              <input name="lname" class="form-control form-control-sm lname" required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-sm-6">
              <label>Email</label>
              <input name="email" class="form-control form-control-sm email" required>
            </div>
            <div class="col-sm-6">
              <label>Contact No.</label>
              <input name="contact" class="form-control form-control-sm contact" required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-sm-8">
              <label>Policy</label><br>
              <select name="policy" class="form-control form-control-sm select2 policy" required></select>
            </div>
            <div class="col-sm-4">
              <label>Payment Plan</label>
              <select name="plan" class="form-control form-control-sm plan" required></select>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-sm-6">
              <label>Insured Amount</label>
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text">&#8369;</span>
                </div>
                <input name="amount" type="text" class="form-control amount" required>
                <div class="invalid-tooltip">Enter insured amount first</div>
              </div>
            </div>
            <div class="col-sm-6">
              <label>Payment by Plan</label>
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-info compute">Compute</button>
                </div>
                <input name="total" type="text" class="form-control payment-by-plan" required readonly>
                <div class="input-group-append">
                  <span class="input-group-text">&#8369;</span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Date Sold</label>
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input name="sold" type="date" class="form-control sold" required>
              </div>
            </div>
            <div class="col-sm-6">
              <label>End Date</label>
              <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input name="end" type="date" class="form-control end" required>
              </div>
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