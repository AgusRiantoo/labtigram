<main>
<div class="section no-pad-bot" id="index-banner">

    <div class="container">

    <!-- start profil -->

    <div class="row">
      <div class="card">
      <div class="card-content row">
        <div class="col s5 m4">
          <div class="img circle">
            <img src="<?php echo base_url('assets/').$user->avatar; ?>" class="circle img-responsive" width="150px">
          </div>
        </div>

        <div class="col s7 m8">
          <h4><?php echo $user->nama; ?></h4>
          <p><?php echo $user->email; ?></p>
        </div>
      </div>
      </div>
    </div>

    <!-- end profil -->

    <!-- start content -->
      
      <div class="row">
        
        <?php foreach ($post as $row) : ?>

          <div class="col s12 m6 l4">
          <div class="card post">
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
              <p><?php echo substr($row->caption, 0, 50)."..."; ?></p>
            </div>
          </div>
        </div>

        <?php endforeach ?>
        
      </div>

      <!-- end content -->
    </div>
  </div>
</main>