<?php
$box_color = ['info', 'success', 'warning', 'danger'];
?>
<section class="content">
  <div class="container-fluid">
    <!-- Small Box (Stat card) -->
    <div class="row">
      <?php foreach ($apps->result() as $key => $app) { ?>
        <div class="col-lg-4 col-sm-6">
          <!-- small card -->
          <div class="small-box bg-<?= $box_color[$key] ?>">
            <div class="inner">
              <h3><?= $app->name; ?></h3>
              <!-- <p><?= $app->link; ?></p> -->
            </div>
            <div class="icon">
              <i class="fas <?= $app->icon; ?>"></i>
            </div>
            <a href="<?= $app->link; ?>" class="small-box-footer" target="_blank">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      <?php } ?>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div>
</section>