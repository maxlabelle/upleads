
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
                    <h5><?php echo ($link) ? 'Edit' : 'New'; ?> link</h5>
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
                  <label>Program</label>
                  <select class="form-control select2" name="campaign_id">
                    <?php foreach($campaigns->getResult() as $row) { ?>
                      <option value="<?=$row->id?>"><?=$row->merchant_name?> - <?=$row->name?> </option>
                    <?php } ?>

                  </select>
                </div>

                <?php if ($link) { ?>
                <div class="form-group">
                  <label>URL</label>
                  <input type="text" class="form-control" readonly disabled="disabled" value="<?=(!empty($link)) ? makeAffiliateUrl($link->affiliate_link_id) : ''?>">
                </div>
                <?php } ?>

                <!-- /.row -->
              </div>
              <div class="card-footer">
                  <a href="/affiliate/links" class="btn btn-default"><i class="fa-solid fa-backward"></i> Cancel</a>
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
