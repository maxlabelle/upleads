
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid pt-2">
        <!-- Info boxes -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-8">
                    <h5><?php echo ($user) ? 'Edit' : 'New'; ?> user</h5>
                  </div>
                  <div class="col-md-4 text-right">

                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <form method="post">
              <div class="card-body">
                <input type="hidden" name="action" value="save">

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="<?=(!empty($user)) ? $user->name : ''?>">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" value="<?=(!empty($user)) ? $user->email : ''?>">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" value="">
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="Active" <?=(!empty($user) && $user->status==='Active') ? 'selected' : ''?>>Active</option>
                    <option value="Inactive" <?=(!empty($user) && $user->status==='Inactive') ? 'selected' : ''?>>Inactive</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Roles</label>
                  <select name="roles[]" class="select2" multiple="multiple" data-placeholder="Roles" style="width: 100%;">
                    <option value="Admin" <?=(!empty($user) && hasRole($user->roles, 'Admin')) ? 'selected' : ''?>>Admin</option>
                    <option value="Affiliate" <?=(!empty($user) && hasRole($user->roles, 'Affiliate')) ? 'selected' : ''?>>Affiliate</option>
                  </select>
                </div>

                <!-- /.row -->
              </div>
              <div class="card-footer">
                  <a href="/admin/users" class="btn btn-default"><i class="fa-solid fa-backward"></i> Cancel</a>
                  <button type="submit" class="btn btn-success float-right"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                </div>
            </div>
            </form>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
