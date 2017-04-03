 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>LABTI Galery <small>Gambar</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- start project list -->
                    <table class="table table-striped projects" id="andika-image-table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Gambar</th>
                          <th>Caption</th>
                          <th>Upload By</th>
                          <th>Tanggal Upload</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       $no = 1;

                       foreach($item as $gambar){?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td width="20%"><img height="100px" width="90%" src="<?php echo base_url("upload/$gambar->file")?>";"></td>
                          <td width="10%"><?php echo $gambar->caption?></td>
                          <td width="15%"><?php echo $gambar->nama?></td>
                          <td><?php echo $gambar->tgl_post?></td>
                          <td width="15%">
                            <a href="<?php echo base_url("admin/hapusGambar/$gambar->id/$gambar->file")?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
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