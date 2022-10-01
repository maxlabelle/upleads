
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
                    <h5><?php echo ($affiliate) ? 'Edit' : 'New'; ?> affiliate</h5>
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
                  <input type="text" class="form-control" name="name" value="<?=(!empty($affiliate)) ? $affiliate->name : ''?>">
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="Active" <?=(!empty($affiliate) && $affiliate->status==='Active') ? 'selected' : ''?>>Active</option>
                    <option value="Inactive" <?=(!empty($affiliate) && $affiliate->status==='Inactive') ? 'selected' : ''?>>Inactive</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Approved</label>
                  <select class="form-control" name="approved">
                    <option value="Yes" <?=(!empty($affiliate) && $affiliate->approved==='Yes') ? 'selected' : ''?>>Yes</option>
                    <option value="No" <?=(!empty($affiliate) && $affiliate->approved==='No') ? 'selected' : ''?>>No</option>
                  </select>
                </div>

                <!-- /.row -->
              </div>
              <div class="card-footer">
                  <a href="/merchants/affiliates" class="btn btn-default"><i class="fa-solid fa-backward"></i> Cancel</a>
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
