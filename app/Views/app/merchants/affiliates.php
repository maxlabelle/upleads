
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
                    <h5>Affiliates</h5>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                    <table id="datatable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Approved</th>
                    <th class="text-right tiny-width" data-orderable="false">

                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($affiliates->getResult() as $row) { ?>
                      <tr>
                        <td><?=$row->name?></td>
                        <td><?=$row->email?></td>
                        <td><?=$row->approved?></td>
                        <td class="text-right tiny-width">
                          <a href="/merchants/affiliates/delete/<?=$row->id?>" class="aDeleteBtn btn btn-sm btn-danger"><i class="fa-solid fa-circle-xmark"></i></a>
                          <a href="/merchants/affiliates/edit/<?=$row->id?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
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
