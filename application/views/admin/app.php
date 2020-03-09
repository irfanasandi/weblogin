<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="dynamic-table" class="display table-bordered table-striped table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>Username</th>
                  <th>Usergroup</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<script type="text/javascript">
  jQuery(function($) {
    if ($.fn.DataTable.isDataTable('#dynamic-table')) {
      $('#dynamic-table').DataTable().destroy();
    }
    myTable = $('#dynamic-table')
      .DataTable({
        dom: "Bfrtip",
        buttons: [{
            extend: "print",
            text: "<span class='glyphicon glyphicon-print'></span> Print"
          },
          {
            extend: "excelHtml5",
            text: "<span class='glyphicon glyphicon-th-list'></span> Excel"
          },
          {
            extend: "pdfHtml5",
            text: "<span class='glyphicon glyphicon-save'></span> PDF",
            title: "Filename"
          }
        ],
        // bAutoWidth: false,
        // "aaSorting": [],
        // "oLanguage": {
        //   "sProcessing": "<img src='<?php echo asset_url('admin/core/img/loader.gif') ?>'>"
        // },
        // "processing": true,
        // "serverSide": true,
        // "order": [],
        // "ajax": {
        //   "url": "<?php echo base_url('admin/admin/ajax') ?>",
        //   "type": "POST",
        // },
        // "sScrollX": "100%",
        // "columnDefs": [{
        //     "targets": [0],
        //     "orderable": false,
        //     "width": "5%",
        //     "targets": 0,
        //   },
        //   {
        //     "targets": [1],
        //     "orderable": false,
        //     "class": "text-center",
        //     "width": "5%",
        //     "targets": 1,
        //   },
        //   {
        //     "targets": [7],
        //     "orderable": false,
        //     "class": "text-center",
        //     "width": "10%",
        //     "targets": 7,
        //   },
        // ],
        // select: {
        //   style: 'multi'
        // }
      });

    $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
  });
</script>