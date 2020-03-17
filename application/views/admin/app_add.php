<div class="modal fade" id="modal-add">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form role="form" id="form-add" action="<?= site_url(); ?>admin/app/save" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">ADD APP</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="app_id"> App Id </label>
            <input type="text" class="form-control" id="app_id" name="app_id" placeholder="App Id" required>
          </div>
          <div class="form-group">
            <label for="app_name">App Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="App Name" required>
          </div>
          <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Link" required>
          </div>
          <div class="form-group">
            <label for="icon">App Name</label>
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon name" required>
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

</script>