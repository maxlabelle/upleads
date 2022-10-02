
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
                        <td>
                          <div class="input-group mb-3">
                            <input type="text" disabled="disabled" readonly value="<?=makeAffiliateUrl($row->affiliate_link_id)?>" class="form-control" id="content" placeholder="URL" aria-label="URL" aria-describedby="button-addon2">
                            <div class="input-group-append">
                              <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon2">Copy</button>
                              <a class="btn btn-outline-secondary" href="<?=makeAffiliateUrl($row->affiliate_link_id)?>" target="_blank">View</a>
                            </div>
                          </div>
                        </td>
                        <td class="text-right tiny-width">
                          <a href="/affiliate/links/delete/<?=$row->id?>" class="aDeleteBtn btn btn-sm btn-danger"><i class="fa-solid fa-circle-xmark"></i></a>
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
