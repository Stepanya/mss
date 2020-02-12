<div class="modal fade" id="view-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-navy">
        <h4 class="modal-title"><i class="fa fa-eye"></i> View Client</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <div class="col-sm-6">
            <label>First Name</label>
            <input class="form-control form-control-sm fname" readonly>
          </div>
          <div class="col-sm-6">
            <label>Last Name</label>
            <input class="form-control form-control-sm lname" readonly>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-6">
            <label>Email</label>
            <input class="form-control form-control-sm email" readonly>
          </div>
          <div class="col-sm-6">
            <label>Contact No.</label>
            <input class="form-control form-control-sm contact" readonly>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-8">
            <label>Sold By</label>
            <input class="form-control form-control-sm sold-by" readonly>
          </div>
          <div class="col-sm-4">
            <label>Seller's Commission</label>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text">&#8369;</span>
              </div>
              <input type="text" class="form-control comm" readonly>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-8">
            <label>Policy</label>
            <input class="form-control form-control-sm policy" readonly>
          </div>
          <div class="col-sm-4">
            <label>Payment Plan</label>
            <input class="form-control form-control-sm plan" readonly>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-6">
            <label>Insured Amount</label>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text">&#8369;</span>
              </div>
              <input type="text" class="form-control amount" readonly>
            </div>
          </div>
          <div class="col-sm-6">
            <label>Payment by Plan</label>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text">&#8369;</span>
              </div>
              <input type="text" class="form-control payment-by-plan" readonly>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <label>Date Sold</label>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
              </div>
              <input class="form-control sold" readonly>
            </div>
          </div>
          <div class="col-sm-4">
            <label>End Date</label>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
              </div>
              <input class="form-control end" readonly>
            </div>
          </div>
          <div class="col-sm-4">
            <label>Next Payment Date</label>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
              </div>
              <input class="form-control next-payment" readonly>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
