<div class="section no-pad-bot" id="index-banner">
  <div class="container">

    <div class="fixed-action-btn horizontal">
      <a class="btn-floating btn-large red" href="<?php echo base_url('user/upload'); ?>">
            <i class="large material-icons">mode_edit</i>
      </a>
    </div>

    <!-- start content -->
    
      <?php foreach ($post as $row) : ?>

      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-image">
            <?php if ($row->kategori == 1): ?>
                  <img src="<?php echo base_url('upload/').$row->file; ?>">
            <?php else: ?>
                  <video controls class="video">
                      <source src="<?php echo base_url('upload/').$row->file; ?>" type="video/mp4">             
                  </video>
            <?php endif ?>
            </div>
            <div class="card-content">
              <p class="card-title"><?php echo $row->nama; ?></p>
              <p><?php echo $row->caption ?></p>
              <p class="grey-text right"><?php echo $row->tgl_post; ?></p>
            </div>
          </div>
        </div>
      </div>

        <?php endforeach ?>

    
      <!-- end content -->

  </div>
</div>