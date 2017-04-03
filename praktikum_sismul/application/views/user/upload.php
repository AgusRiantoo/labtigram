<div class="section no-pad-bot" id="index-banner">

<div class="container">

<!-- start content -->
  
<div class="row">
<div class="col s12">
<h3>Add post</h3>
<div class="row">
<form class="col s12" action="<?php echo base_url('user/posting'); ?>" method="post" enctype="multipart/form-data">

  <div class="row">
    <label>Select Type</label>
    <select class="browser-default" name="kategori">
      <option value="" disabled selected>Choose category</option>
      <option value="1">Image</option>
      <option value="2">Video</option>
    </select>
  </div>
  
  <div class="row">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="input_file" accept="image/*|video/*">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" required>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <textarea class="materialize-textarea" name="caption"></textarea> 
      <label for="first_name">Caption</label>
    </div>
  </div>

  <div class="row">
    <input type="submit" class="waves-effect waves-light btn" value="Submit" />
  </div>

</form>
</div>
    </div>
  </div>


  <!-- end content -->
</div>
</div>