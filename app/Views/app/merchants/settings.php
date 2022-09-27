
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
                    <h5>Settings</h5>
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
                  <label>Merchant name</label>
                  <input type="text" class="form-control" name="name" value="<?=(!empty($settings)) ? $settings['name'] : ''?>">
                </div>

                <div class="form-group">
                  <label>Merchant URL slug</label>
                  <input type="text" class="form-control" name="url_slug" value="<?=(!empty($settings)) ? $settings['url_slug'] : ''?>">
                </div>

                <div class="form-group">
                  <label>Theme</label>
                  <select class="form-control" name="theme">
                    <option value="Dark" <?=(!empty($settings) && $settings['theme']==='Dark') ? 'selected' : ''?>>Dark</option>
                    <option value="Light" <?=(!empty($settings) && $settings['theme']==='Light') ? 'selected' : ''?>>Light</option>
                  </select>
                </div>

                <!-- /.row -->
              </div>
              <div class="card-footer">
                  <a href="/dashboard" class="btn btn-default"><i class="fa-solid fa-backward"></i> Cancel</a>
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
