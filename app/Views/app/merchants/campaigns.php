
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
                  <div class="col-md-12">
                    <h5>Campaigns</h5>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                    <table id="datatable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th class="text-left tiny-width"><a href="/merchants/campaigns/new" class="btn btn-sm btn-success"><i class="fa-solid fa-circle-plus"></i></a></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($campaigns->getResult() as $row) { ?>
                      <tr>
                        <td><?=$row->name?></td>
                        <td><?=$row->status?></td>
                        <td class="text-right tiny-width">
                          <a href="/merchants/campaigns/edit/<?=$row->id?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a id="aDeleteBtn" href="/merchants/campaigns/delete/<?=$row->id?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-circle-xmark"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>

                </table>

                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
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
