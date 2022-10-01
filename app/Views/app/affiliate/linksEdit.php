
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
                    <h5>Links</h5>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                    <table id="datatable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Merchant name</th>
                    <th>Program</th>
                    <th>Link</th>
                    <th class="text-right tiny-width" data-orderable="false">
                      <a href="/affiliate/links/new" class="btn btn-sm btn-success"><i class="fa-solid fa-circle-plus"></i></a>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($links->getResult() as $row) { ?>

                      <tr>
                        <td><?=$row->merchant_name?></td>
                        <td><?=$row->name?></td>
                        <td class="text-right tiny-width">
                          <?php if ($row->userStatus == 'Approved') { ?>
                            <a href="/affiliate/programs/leave/<?=$row->id?>" class="btn btn-sm btn-danger aDeleteBtn"><i class="fa-solid fa-circle-xmark"></i> Leave</a>
                          <a href="#" class="btn btn-sm btn-success"><i class="fa-solid fa-square-check"></i> Joined</a>
                        <?php } elseif ($row->userStatus == 'Pending') { ?>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fa-solid fa-hourglass-start"></i> Pending approval</a>
                          <?php } else { ?>
                            <a href="/affiliate/programs/join/<?=$row->id?>" class="btn btn-sm btn-info"><i class="fa-solid fa-arrow-right"></i> Ask to join</a>
                          <?php } ?>
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
