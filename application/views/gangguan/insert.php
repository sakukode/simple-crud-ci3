<div class="row">
  <div class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="#">Depan</a></li>
      <li><a href="<?php echo site_url('gangguan');?>">Gangguan</a></li>
      <li class="active">Insert</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <a href="<?php echo site_url('gangguan');?>" class="btn btn-primary">Back</a>
  </div>
</div>
<div class="clearfix"> <br></div>
<div class="row">
  <div class="col-md-12">
    <?php if(validation_errors()): ?>
    <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo validation_errors(); ?>  
    </div>
    <?php endif; ?>
  </div>
  
  <div class="col-md-12">
    <form action="<?php echo site_url('gangguan/insert');?>" method="post">
      <div class="form-group">
        <label for="name">Deskripsi Gangguan *</label>
        <input type="text" class="form-control" id="name" name="deskripsi_gangguan" value="<?php echo set_value('deskripsi_gangguan'); ?>" placeholder="Name *">
      </div>
      <div class="form-group">
        <label for="type">Rencana Tindakan *</label>
        <input type="text" class="form-control" id="type" name="rencana_tindakan" placeholder="Tindakan *" value="<?php echo set_value('rencana_tindakan'); ?>">
      </div>
      <div class="form-group">
        <label for="type">Eksekusi *</label>
        <input type="text" class="form-control" id="type" name="eksekusi" placeholder="Eksekusi *" value="<?php echo set_value('eksekusi'); ?>">
      </div>
       <div class="form-group">
        <label for="type">Keterangan *</label>
        <input type="text" class="form-control" id="type" name="keterangan" placeholder="Keterangan *" value="<?php echo set_value('keterangan'); ?>">
      </div>
      <div class="form-group">
        <label for="status">Perangkat </label>
        <select class="form-control" name="id_perangkat">
          <?php foreach($perangkat as $row): ?>
          <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
          <?php endforeach;?>
        </select>
      </div>
      
      <button type="submit" class="btn btn-success">Submit</button>
      <button type="reset" class="btn btn-warning">Reset</button>
    </form>
  </div>
</div>