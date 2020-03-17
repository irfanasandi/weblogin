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
            <select class="form-control select2" style="width: 100%;" id="edit_app_id" name="app_id" required>

            </select>
          </div>
          <div class="form-group">
            <label for="edit_nodule_name">Module Name</label>
            <input type="text" class="form-control" name="name" id="edit_module_name" placeholder="Module Name">
          </div>
          <div class="form-group">
            <label for="edit_description">Description</label>
            <textarea class="form-control" rows="3" name="description" id="edit_description" placeholder="Enter ..."></textarea>
          </div>
          <div class="form-group">
            <label for="edit_status">Module Status</label>
            <input type="text" class="form-control" name="icon" id="edit_status" placeholder="Icon">
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
<?php
$apps =  json_encode($apps->result());
?>

<script>
  document.addEventListener('click', async e => {

    if (e.target.classList.contains('edit-btn')) {
      const res = await fetch(`${base_url}admin/module/edit/${e.target.dataset.id}`);
      const data = await res.json();

      const appId = document.getElementById('edit_app_id');
      const moduleName = document.getElementById('edit_module_name');
      const desc = document.getElementById('edit_description');
      const status = document.getElementById('edit_status');
      const id = document.getElementById('id');
      const selectAppId = document.getElementById('edit_app_id');

      id.value = data[0].id;
      moduleName.value = data[0].name;
      desc.value = data[0].description;
      status.value = data[0].status;

      const apps = <?php echo $apps ?>;
      const opt = apps.map(app => {
        const selected = app.app_id == data[0].app_id ? "selected" : "";
        selectAppId.appendChild(`<option ${selected} value="${app.id}"> ${app.name} </option>`);
      });

    }
  })
</script>