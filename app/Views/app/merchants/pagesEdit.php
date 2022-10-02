
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
                    <h5><?php echo ($page) ? 'Edit' : 'New'; ?> page</h5>
                  </div>
                  <div class="col-md-4 text-right">

                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <form method="post">
              <div class="card-body">
                <?php foreach($errors as $error) { ?>
                  <div class="alert alert-danger" role="alert">
                    <?=$error?>
                  </div>
                <?php } ?>
                <input type="hidden" name="action" value="save">

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="page_name" value="<?=(!empty($page)) ? $page->page_name : ''?>">
                </div>

                <div class="form-group">
                  <label>Theme</label>
                  <select class="form-control" name="page_theme">
                    <option value="Dark" <?=(!empty($page) && $page->page_theme==='Dark') ? 'selected' : ''?>>Dark</option>
                    <option value="Light" <?=(!empty($page) && $page->page_theme==='Light') ? 'selected' : ''?>>Light</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Type</label>
                  <select class="form-control" name="page_type">
                    <option value="Regular" <?=(!empty($page) && $page->page_type==='Regular') ? 'selected' : ''?>>Regular page</option>
                    <option value="Default" <?=(!empty($page) && $page->page_type==='Default') ? 'selected' : ''?>>Default home</option>
                    <option value="Header" <?=(!empty($page) && $page->page_type==='Header') ? 'selected' : ''?>>Header</option>
                    <option value="Footer" <?=(!empty($page) && $page->page_type==='Footer') ? 'selected' : ''?>>Footer</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="page_title" value="<?=(!empty($page)) ? $page->page_title : ''?>">
                </div>

                <div class="form-group">
                  <label>Body <?=(!empty($page) && ($page->page_type == 'Default' || $page->page_type == 'Regular')) ? '( <a href="'.base_url().'/page/'.$page->page_name.'" target="_blank">Preview</a>) ' : ''?></label>
                  <textarea id="summernote" class="summernote" name="page_body"><?=(!empty($page)) ? base64_decode($page->page_body) : ''?></textarea>
                </div>

                <!-- /.row -->
              </div>
              <div class="card-footer">
                  <a href="/merchants/pages" class="btn btn-default"><i class="fa-solid fa-backward"></i> Cancel</a>
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
