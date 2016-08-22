<section class="content">
  <div class="bd-example">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel">Add User</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label class="form-control-label">Name:</label>
                <input type="text" class="form-control" id="name-text" name="userName">
              </div>
              <div class="form-group">
                <label class="form-control-label">Address:</label>
                <textarea class="form-control" id="address-text"></textarea>
              </div>
              <div class="input-group date" data-provide="datepicker">
                <input type="text" data-format="dd/MM/yyyy hh:mm:ss" class="form-control datepicker">
                <div class="input-group-addon">
                  <a href="#"><span class="glyphicon glyphicon-th"></span></a>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    