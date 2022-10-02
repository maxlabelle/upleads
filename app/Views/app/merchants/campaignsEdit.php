
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
                    <h5><?php echo ($campaign) ? 'Edit' : 'New'; ?> campaign</h5>
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
                  <input type="text" class="form-control" name="name" value="<?=(!empty($campaign)) ? $campaign->name : ''?>">
                </div>

                <div class="form-group">
                  <label>Tracking tag</label>
                  <div class="input-group mb-3">
                    <input type="text" disabled="disabled" readonly value='<script src="<?=base_url()?>/v/<?=(!empty($campaign)) ? $campaign->tracking_tag_id : ''?>"></script>' class="form-control" id="content" placeholder="URL" aria-label="URL" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon2">Copy</button>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Item URL</label>
                  <input type="text" class="form-control" name="item_url" value="<?=(!empty($campaign)) ? $campaign->item_url : ''?>">
                </div>

                <div class="form-group">
                  <label>Item price ($)</label>
                  <input type="text" class="form-control" name="item_price" value="<?=(!empty($campaign)) ? $campaign->item_price : ''?>">
                </div>

                <div class="form-group">
                  <label>Item commission (%) <?=(!empty($campaign) && $campaign->item_price && $campaign->item_commission_pc) ? "- [ ".round($campaign->item_price * ($campaign->item_commission_pc / 100 ), 2)."$ ]" : ''?></label>
                  <input type="text" class="form-control" name="item_commission_pc" value="<?=(!empty($campaign)) ? $campaign->item_commission_pc : ''?>">
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="Active" <?=(!empty($campaign) && $campaign->status==='Active') ? 'selected' : ''?>>Active</option>
                    <option value="Inactive" <?=(!empty($campaign) && $campaign->status==='Inactive') ? 'selected' : ''?>>Inactive</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>New affiliate requests approval</label>
                  <select class="form-control" name="affiliateApproval">
                    <option value="Automatic" <?=(!empty($campaign) && $campaign->affiliateApproval==='Automatic') ? 'selected' : ''?>>Automatic approval</option>
                    <option value="Manual" <?=(!empty($campaign) && $campaign->affiliateApproval==='Manual') ? 'selected' : ''?>>Manual approval</option>
                  </select>
                </div>

                <!-- /.row -->
              </div>
              <div class="card-footer">
                  <a href="/merchants/campaigns" class="btn btn-default"><i class="fa-solid fa-backward"></i> Cancel</a>
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
