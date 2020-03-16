<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with minimal features & hover style</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="apps-table" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>App Id</th>
                <th>Name</th>
                <th>Link</th>
                <th>fa icon</th>
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

<script type="text/javascript">
  $(function() {
    $("#apps-table").DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],
      "ajax": {
        "url": "<?php echo site_url('admin/app/ajax') ?>",
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
          "targets": 5,
        },
      ],
    });
  });
</script>