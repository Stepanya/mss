<div class="modal fade" id="view-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-navy">
        <h4 class="modal-title"><i class="fa fa-eye"></i> View Applicant</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <div class="col-sm-3">
            <label>First Name</label>
            <input class="form-control form-control-sm fname" readonly>
          </div>
          <div class="col-sm-3">
            <label>Last Name</label>
            <input class="form-control form-control-sm lname" readonly>
          </div>
          <div class="col-sm-1">
            <label>M.I</label>
            <input class="form-control form-control-sm mi" readonly>
          </div>
          <div class="col-sm-3">
            <label>Email</label>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input class="form-control form-control-sm email" readonly>
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-3">
            <label>Contact No.</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone"></i></span>
              </div>
              <input class="form-control form-control-sm contact" readonly>
            </div>
          </div>
          <div class="col-sm-3">
            <label>Position Applied</label>
            <input class="form-control form-control-sm position" readonly>
          </div>
          <div class="col-sm-3">
            <label>Interview Date</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
              </div>
              <input class="form-control form-control-sm date" readonly>
            </div>
          </div>
          <div class="col-sm-3">
            <label>Stage</label>
            <input class="form-control form-control-sm stage" readonly>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-12">
            <label>Why do you want to work with us?</label>
            <textarea rows="2" class="form-control form-control-sm reason" readonly></textarea>
          </div>
        </div>

        <div class="row">
          <label>Stage History</label>
          <div class="card-body table-responsive">
            <table class="table table-striped table-sm text-center tracker-table">
              <thead class="bg-pastel">
                <th> Resume </th>
                <th> Interview </th>
                <th> Seminar </th>
                <th> Arise </th>
                <th> Training </th>
                <th> Exam </th>
                <th> Result </th>
              </thead>
              <tfoot class="bg-pastel">
                <tr>
                  <td/>
                  <td/>
                  <td/>
                  <td/>
                  <td/>
                  <td/>
                  <td/> 
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-12">
            <label>Resume</label>
            <object class="resume" type="application/pdf" width="100%" height="800px"> 
              <p>It appears you don't have a PDF plugin for this browser.</p>  
            </object>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
