<div class="row">
  <div class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="#">Depan</a></li>
      <li><a href="<?php echo site_url('perangkat');?>">Perangkat</a></li>
      <li class="active">Insert</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <a href="<?php echo site_url('perangkat');?>" class="btn btn-primary">Back</a>
  </div>
</div>
<div class="clearfix"> <br></div>
<div class="row">
  <?php if($model): ?>
  <div class="col-md-12">
    <?php if(validation_errors()): ?>
    <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo validation_errors(); ?>  
    </div>
    <?php endif; ?>

    <?php if($this->session->flashdata('message_danger')): ?>
    <div class="alert alert-danger"> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php echo $this->session->flashdata('message_danger'); ?> 
    </div>
    <?php endif; ?> 
  </div>
  
  <div class="col-md-12">
    <form action="<?php echo site_url('perangkat/update/'.$model->id);?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $model->name; ?>" placeholder="Name *">
      </div>
      <div class="form-group">
        <label for="type">Type *</label>
        <select class="form-control" name="type">
          <option value="laptop" <?php echo selected_combobox('laptop', $model->status);?>>Laptop</option>
          <option value="komputer" <?php echo selected_combobox('komputer', $model->status);?>>Komputer</option>
          <option value="laptop" <?php echo selected_combobox('tinkpad', $model->status);?>>Tinkpad</option>
        </select>
      </div>
      <div class="form-group">
        <label for="status">Status </label>
        <select class="form-control" name="status">
          <option value="Baik" <?php echo selected_combobox('Baik', $model->status);?>>Baik</option>
          <option value="Rusak Ringan" <?php echo selected_combobox('Rusak Ringan', $model->status);?>>Rusak Ringan</option>
          <option value="Rusak Berat" <?php echo selected_combobox('Rusak Berat', $model->status);?>>Rusak Berat</option>
          <option value="Mati Total" <?php echo selected_combobox('Mati Total', $model->status);?>>Mati Total</option>
        </select>
      </div>
      <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" id="picture" name="picture">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      <button type="reset" class="btn btn-warning">Reset</button>
    </form>
  </div>
  <?php else: ?>
    <p>Oops. Sorry, data not found</p>
  <?php endif;?>
</div>