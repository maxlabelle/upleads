
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
                    <h5>Programs</h5>
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
                    <th class="text-right tiny-width" data-orderable="false">

                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($campaigns->getResult() as $row) { ?>
                      <?php
                      $approvalPending = false;
                      $joined = false;
                      foreach($user_programs->getResult() as $upRow) {
                        if ($upRow->campaign_id == $row->id && $upRow->status=="Approved") {
                          $joined = true;
                          break;
                        }
                        if ($upRow->campaign_id == $row->id && $upRow->status=="Pending") {
                          $approvalPending = true;
                          break;
                        }
                      }
                      ?>
                      <tr>
                        <td><?=$row->name?></td>
                        <td><?=$row->name?></td>
                        <td><?=$row->status?></td>
                        <td class="text-right tiny-width">
                          <?php if ($joined) { ?>
                          <a href="#" class="btn btn-sm btn-success"><i class="fa-solid fa-square-check"></i> Joined</a>
                          <?php } elseif ($approvalPending) { ?>
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
