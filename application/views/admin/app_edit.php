<div class="modal fade" id="modal-edit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form role="form-add" action="<?= site_url(); ?>admin/app/update" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">EDIT APP</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="edit_app_id"> App Id </label>
            <input type=" text" class="form-control" name="app_id" id="edit_app_id" placeholder="Enter App Id">
          </div>
          <div class="form-group">
            <label for="edit_app_name">App Name</label>
            <input type="text" class="form-control" name="name" id="edit_app_name" placeholder="App Name">
          </div>
          <div class="form-group">
            <label for="edit_link">Link</label>
            <input type="text" class="form-control" name="link" id="edit_link" placeholder="Link">
          </div>
          <div class="form-group">
            <label for="edit_icon">App Icon</label>
            <input type="text" class="form-control" name="icon" id="edit_icon" placeholder="Icon">
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
  document.addEventListener('click', async e => {
    // fetch(`${base_url}admin/app/edit/${e.target.dataset.id}`)
    //   .then(res => res.json()).then(data => console.log(data))
    if (e.target.classList.contains('edit-btn')) {
      const res = await fetch(`${base_url}admin/app/edit/${e.target.dataset.id}`);
      const data = await res.json();

      const appId = document.getElementById('edit_app_id');
      const appName = document.getElementById('edit_app_name');
      const link = document.getElementById('edit_link');
      const icon = document.getElementById('edit_icon');
      const id = document.getElementById('id');

      id.value = data[0].id;
      appId.value = data[0].app_id;
      appName.value = data[0].name;
      link.value = data[0].link;
      icon.value = data[0].icon;
    }
  })
</script>