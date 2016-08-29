<section class="content">
  <div class="bd-example">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel" data-title="">Add User</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label class="form-control-label">Name: <span id="error">Name cannot be blank!!</span></label>
                <input type="text" class="form-control" id="name-text" name="userName">
              </div>
              <div class="form-group">
                <label class="form-control-label">Sex:</label>
                <select id="sex-text" name="sex" class="form-control">
                  <option value="f">Female</option>
                  <option value="m">Male</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-control-label">Type:</label>
                <select id="type-text" name="type" class="form-control">
                  <option value="adim">Admin</option>
                  <option value="editor">Editor</option>
                  <option value="author">author</option>
                  <option value="contributor">Contributor</option>
                </select>
              </div>
              <label class="form-control-label">Date Of Birth:<span id="error">DOB cannot be blank!!</span></label>
              <div class="input-group date" data-provide="datepicker">
                <input type="text" data-format="yyyy/MM/dd H:i:s" class="form-control datepicker" name="dob">
                <div class="input-group-addon">
                  <a href="#"><span class="glyphicon glyphicon-th"></span></a>
                </div>
              </div>
              <div class="form-group">
                <label class="form-control-label">Email:<span id="error">Email cannot be blank!!</span></label>
                <input type="text" class="form-control" id="email-text" name="email">
              </div>
              <div class="form-group">
                <label class="form-control-label">Phone:</label>
                <input type="text" class="form-control" id="phone-text" name="phone">
              </div>
              <div class="form-group">
                <label class="form-control-label">Password:<span id="error">Password cannot be blank!!</span></label>
                <input type="password" class="form-control" id="password-text" name="password">
              </div>
              <div class="form-group">
                <label class="form-control-label">Confirm Password:<span id="error">Please re-enter passowrd!!</span></label>
                <input type="password" class="form-control" id="con-password-text" name="con-password">
              </div>
              <div class="form-group">
                <label class="form-control-label">Languages:</label>
                <select id="lang-text" name="lang" class="form-control">
                  <option value="kh">KH</option>
                  <option value="fr">FR</option>
                  <option value="en">EN</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-control-label">Address:</label>
                <textarea class="form-control" id="address-text" name="address"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="btnSave">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    