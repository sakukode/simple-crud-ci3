<div class="row">
  <div class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Gangguan</a></li>
      <li class="active">Data</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <a href="<?php echo site_url('gangguan');?>" class="btn btn-primary">Back</a>
    <?php if($model): ?>
    <a href="<?php echo site_url('gangguan/update/'.$model->id);?>" class="btn btn-primary">Update</a>
    <a href="<?php echo site_url('gangguan/delete/'.$model->id);?>" onclick="return confirm('Are you sure want delete this data?')" class="btn btn-danger">Delete</a>
    <?php endif; ?>
  </div>
</div>
<div class="clearfix"> <br></div>
<div class="row">
  <div class="col-md-12">
    <?php if($model): ?>
    <table class="table table-striped">
      <tbody>
        <tr>
          <td>Deskripsi Gangguan</td>
          <td><?php echo $model->deskripsi_gangguan;?></td>
        </tr>
        <tr>
          <td>Rencana Tindakan</td>
          <td><?php echo $model->rencana_tindakan;?></td>
        </tr>
        <tr>
          <td>Eksekusi</td>
          <td><?php echo $model->eksekusi;?></td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td><?php echo $model->keterangan;?></td>
        </tr>
        <tr>
          <td>Perangkat</td>
          <td><?php echo $model->perangkat_name;?></td>
        </tr>
      </tbody>
    </table>
    <?php else: ?>
    <tbody>
      <tr>
        <td>Oops. Sorry, Data not found</td>
      </tr>
    </tbody>
    <?php endif; ?>
  </div>
</div>