
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
                  <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                  <label>New affiliate requests approval</label>
                  <select class="form-control" name="affiliateApproval">
                    <option value="auto">Automatic approval</option>
                    <option value="manual">Manual approval</option>
                  </select>
                </div>

                <!-- /.row -->
              </div>
              <div class="card-footer">
                  <a href="/merchants/campaigns" class="btn btn-default">Cancel</a>
                  <button type="submit" class="btn btn-success float-right">Save</button>
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
