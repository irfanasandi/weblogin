<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <!-- Profile Image -->
      <div class="card card-primary card-outline roleGroup">
        <div class="card-header">
          <h3 class="card-title">ROLE</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <ul class="nav nav-pills flex-column">
            <?php foreach ($role->result() as $val) { ?>
              <li class="nav-item role">
                <a href="#" class="nav-link">
                  <i class="fas fa-inbox"></i>
                  <?= $val->name; ?>
                </a>
              </li>
            <?php } ?>
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <?php
      foreach ($apps->result() as $app) {
      ?>
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title pr-2"><?= $app->name; ?></h3>
            <div class="icheck-default d-inline">
              <input type="checkbox" id="<?= $app->app_id; ?>" checked="">
              <label for="<?= $app->app_id; ?>">
              </label>
            </div>
          </div>
          <div class="card-body">
            <!-- Minimal style -->
            <div class="row">
              <div class="col-md-12">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Full Access</th>
                      <th>Module</th>
                      <th style="width: 400px">Access</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    foreach ($modules->result() as $module) {
                      if ($module->app_id === $app->app_id) {
                        $no++;
                    ?>
                        <tr>
                          <td><?= $no; ?></td>
                          <td>
                            <div class="icheck-primary d-inline">
                              <input type="checkbox" id="checkAll<?= $module->name; ?>">
                              <label for="checkAll<?= $module->name; ?>">
                              </label>
                            </div>
                          </td>
                          <td><?= $module->description; ?></td>
                          <td>
                            <div class="icheck-primary d-inline  mr-3">
                              <input type="checkbox" id="create<?= $module->name; ?>">
                              <label for="create<?= $module->name; ?>">
                                Create
                              </label>
                            </div>
                            <div class="icheck-primary d-inline mr-3">
                              <input type="checkbox" id="read<?= $module->name; ?>">
                              <label for="read<?= $module->name; ?>">
                                Read
                              </label>
                            </div>
                            <div class="icheck-primary d-inline mr-3">
                              <input type="checkbox" id="update<?= $module->name; ?>">
                              <label for="update<?= $module->name; ?>">
                                Update
                              </label>
                            </div>
                            <div class="icheck-primary d-inline ">
                              <input type="checkbox" id="delete<?= $module->name; ?>">
                              <label for="delete<?= $module->name; ?>">
                                Delete
                              </label>
                            </div>
                          </td>
                        </tr>
                    <?php }
                    } ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
          <!-- /.card-body -->
        </div>
      <?php } ?>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->