<div class="modal fade" id="edit-modal" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form role="form" id="update-form">
        <div class="modal-header bg-navy">
          <h4 class="modal-title">
            <i class="fa fa-edit"></i>
            Edit Announcement
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" placeholder="Enter subject" name="subject" id="subject" required>
          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control summernote" rows="3" placeholder="Enter message" name="message" id="message" required></textarea>
          </div>
          <input type="hidden" name="id" id="update-id" />
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>