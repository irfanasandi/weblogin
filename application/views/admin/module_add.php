<div class="modal fade" id="modal-add">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form role="form" id="form-add" action="<?= site_url(); ?>admin/app/save" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">MODULE APP</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="app_id"> App Id </label>
            <select class="form-control select2" style="width: 100%;" id="app_id" name="app_id" required>
              <?php foreach ($apps->result() as $app) { ?>
                <option value="<?= $app->id; ?>"><?= $app->name; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="app_name">Module Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="App Name" required>
          </div>
          <div class="form-group">
            <label for="link">Description</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Link" required>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script>
  $('.select2').select2({
    theme: "bootstrap4"
  });
</script>