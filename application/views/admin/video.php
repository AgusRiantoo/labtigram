   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <!-- Main Content  -->




            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>LABTI Galery <small>Video</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- start project list -->
                    <table class="table table-striped projects" id="andika-image-table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Video</th>
                          <th>Caption</th>
                          <th>Upload By</th>
                          <th>Tanggal Upload</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      foreach($item as $video){

                        ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td width="20%">
                            <video height="100px" width="90%" class="responsive-video" controls>
                                <source src="<?php echo base_url("upload/$video->file");?>" type="video/mp4">
                             </video>
                          </td>
                          <td width="10%"><?php echo $video->caption?></td>

                          <td width="15%"><?php echo $video->nama?></td>
                          <td>
                            <?php echo $video->tgl_post?>
                          </td>
                          <td width="15%">
                            <a href="<?php echo base_url("admin/hapusVideo/$video->id/$video->file")?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->