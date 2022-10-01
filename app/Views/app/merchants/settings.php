
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
              <form method="post"  enctype="multipart/form-data">
              <div class="card-body">
                <input type="hidden" name="action" value="save">
                <?php foreach($errors as $error) { ?>
                  <div class="alert alert-danger" role="alert">
                    <?=$error?>
                  </div>
                <?php } ?>

                <div class="form-group">
                  <label>Merchant name</label>
                  <input type="text" class="form-control" required name="name" value="<?=(!empty($config)) ? $config['name'] : ''?>">
                </div>

                <div class="form-group">
                  <label>Merchant domain (www.domain.com)</label>
                  <input type="text" class="form-control" required name="merchant_domain" value="<?=(!empty($settings)) ? $settings->merchant_domain : ''?>">
                </div>

                <div class="form-group">
                  <label>Merchant URL slug</label>
                  <input type="text" disabled="disabled" readonly class="form-control" name="url_slug" value="<?=(!empty($settings)) ? $settings->merchant_url_slug : ''?>">
                </div>

                <div class="form-group">
                  <label>Auto-approve new affiliates</label>
                  <select class="form-control" name="autoapprove">
                    <option value="Yes" <?=(!empty($config) && $config['autoapprove']==='Yes') ? 'selected' : ''?>>Yes</option>
                    <option value="No" <?=(!empty($config) && $config['autoapprove']==='No') ? 'selected' : ''?>>No</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Theme</label>
                  <select class="form-control" name="theme">
                    <option value="Dark" <?=(!empty($config) && $config['theme']==='Dark') ? 'selected' : ''?>>Dark</option>
                    <option value="Light" <?=(!empty($config) && $config['theme']==='Light') ? 'selected' : ''?>>Light</option>
                  </select>
                </div>


                <div class="form-group">
                  <label>Logo</label>
                  <hr/>
                  <div class="row">
                    <div class="col-md-10">
                      <input type="file" class="from-control" name="merchant_logo">
                    </div>
                    <div class="col-md-2 text-right">
                      <img src="<?=(!empty($settings) && $settings->merchant_logo_path) ? base_url().'/a/'.$settings->merchant_url_slug.'/logo/thumb' : base_url().'/dist/img/default-150x150.png' ?>" class="img-fluid">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Login & Register page background</label>
                  <hr/>
                  <div class="row">
                    <div class="col-md-10">
                      <input type="file" class="from-control" name="merchant_bg">
                    </div>
                    <div class="col-md-2 text-right">
                      <img src="<?=(!empty($settings) && $settings->merchant_bg_path) ? base_url().'/a/'.$settings->merchant_url_slug.'/bg/thumb' : base_url().'/dist/img/default-150x150.png' ?>" class="img-fluid">
                    </div>
                  </div>
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
