
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
                <?php foreach($errors as $error) { ?>
                  <div class="alert alert-danger" role="alert">
                    <?=$error?>
                  </div>
                <?php } ?>
                <div class="row">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-general-tab" data-toggle="pill" href="#vert-tabs-general" role="tab" aria-controls="vert-tabs-general" aria-selected="true">General</a>
                  <a class="nav-link" id="vert-tabs-display-tab" data-toggle="pill" href="#vert-tabs-display" role="tab" aria-controls="vert-tabs-display" aria-selected="false">Display</a>
                  <a class="nav-link" id="vert-tabs-terms-tab" data-toggle="pill" href="#vert-tabs-terms" role="tab" aria-controls="vert-tabs-terms" aria-selected="false">Terms</a>
                  <a class="nav-link" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="false">Home page</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade active show" id="vert-tabs-general" role="tabpanel" aria-labelledby="vert-tabs-general-tab">

                                    <div class="form-group">
                                      <label>Merchant name</label>
                                      <input type="text" class="form-control" required name="merchant_name" value="<?=(!empty($settings)) ? $settings->merchant_name : ''?>">
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
                                      <label>Merchant API key</label>
                                      <input type="text" disabled="disabled" readonly class="form-control" name="merchant_api_key" value="<?=(!empty($settings)) ? $settings->merchant_api_key : ''?>">
                                    </div>

                                    <div class="form-group">
                                      <label>Auto-approve new affiliates</label>
                                      <select class="form-control" name="merchant_autoapprove">
                                        <option value="Yes" <?=(!empty($settings) && $settings->merchant_autoapprove==='Yes') ? 'selected' : ''?>>Yes</option>
                                        <option value="No" <?=(!empty($settings) && $settings->merchant_autoapprove==='No') ? 'selected' : ''?>>No</option>
                                      </select>
                                    </div>


                  </div>
                  <div class="tab-pane fade" id="vert-tabs-display" role="tabpanel" aria-labelledby="vert-tabs-terms-tab">
                    <div class="form-group">
                      <label>Theme</label>
                      <select class="form-control" name="merchant_theme">
                        <option value="Dark" <?=(!empty($settings) && $settings->merchant_theme==='Dark') ? 'selected' : ''?>>Dark</option>
                        <option value="Light" <?=(!empty($settings) && $settings->merchant_theme==='Light') ? 'selected' : ''?>>Light</option>
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
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-terms" role="tabpanel" aria-labelledby="vert-tabs-terms-tab">
                    <div class="form-group">
                      <label>Terms</label>
                      <textarea id="summernote" class="summernote" name="merchant_terms"><?=(!empty($settings)) ? $settings->merchant_terms : ''?></textarea>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                    <div class="form-group">
                      <label>Home page <?=(!empty($settings) && $settings->merchant_url_slug) ? '( <a href="/a/'.$settings->merchant_url_slug.'/home" target="_blank">Preview</a>) ' : ''?></label>
                      <textarea id="summernote" class="summernote" name="merchant_home"><?=(!empty($settings)) ? $settings->merchant_home : ''?></textarea>
                    </div>
                  </div>

                </div>
              </div>
            </div>
                <input type="hidden" name="action" value="save">




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
