<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with minimal features & hover style</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-md-2 mb-3">
            <button type="button" class="btn" style="background: #3c8dbc;color:#fff" data-toggle="modal" data-target="#modal-add">
              TAMBAH MODULE
            </button>
          </div>
          <table id="apps-table" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>App Id</th>
                <th>Description</th>
                <th>Active</th>
                <th>#</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
</section>

<?php

if ($this->session->flashdata('info')) {
  echo "<script>toastr.success('" . $this->session->flashdata('info') . "')</script>";
}

$this->load->view('admin/module_add');
$this->load->view('admin/module_edit');
?>

<script type="text/javascript">
  $(function() {
    $("#apps-table").DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],
      "ajax": {
        "url": "<?php echo site_url('admin/module/ajax') ?>",
        "type": "POST",
      },
      "columnDefs": [{
          "targets": [0],
          "orderable": true,
          "width": "5%",
          "targets": 0,
        },
        {
          "targets": [5],
          "orderable": false,
          "width": "10%",
          "class": "text-center",
          "targets": 4,
        },
      ],
    });
  });

  jQuery(function($) {
    $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
  })
</script>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        Apakah anda ingin menghapus data ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger btn-ok btn-sm">Delete</a>
      </div>
    </div>
  </div>
</div>