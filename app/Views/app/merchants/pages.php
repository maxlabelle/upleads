
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
                    <h5>Pages</h5>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                    <table id="datatable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Title</th>
                    <th class="text-right tiny-width" data-orderable="false">
                      <a href="/merchants/pages/new" class="btn btn-sm btn-success"><i class="fa-solid fa-circle-plus"></i></a>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($pages->getResult() as $row) { ?>
                      <tr>
                        <td><?=$row->page_name?></td>
                        <td><?=$row->page_type?></td>
                        <td><?=$row->page_title?></td>
                        <td class="text-right tiny-width">
                          <a href="/merchants/pages/delete/<?=$row->id?>" class="btn btn-sm btn-danger aDeleteBtn"><i class="fa-solid fa-circle-xmark"></i></a>
                          <a href="/merchants/pages/edit/<?=$row->id?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
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
