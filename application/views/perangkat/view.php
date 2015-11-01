<div class="row">
  <div class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Library</a></li>
      <li class="active">Data</li>
    </ol>
  </div>
</div>
<div class="row">
 <div class="col-md-12">
    <?php if($this->session->flashdata('message_success')): ?>
    <div class="alert alert-success"> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php echo $this->session->flashdata('message_success'); ?> 
    </div>
    <?php endif; ?>  
  </div>

  <div class="col-md-12">
    <?php if($this->session->flashdata('message_danger')): ?>
    <div class="alert alert-danger"> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php echo $this->session->flashdata('message_danger'); ?> 
    </div>
    <?php endif; ?>  
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <a href="<?php echo site_url('perangkat');?>" class="btn btn-primary">Back</a>
    <?php if($model): ?>
    <a href="<?php echo site_url('perangkat/update/'.$model->id);?>" class="btn btn-primary">Update</a>
    <a href="<?php echo site_url('perangkat/delete/'.$model->id);?>" onclick="return confirm('Are you sure want delete this data?')" class="btn btn-danger">Delete</a>
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
          <td>Name</td>
          <td><?php echo $model->name;?></td>
        </tr>
        <tr>
          <td>Type</td>
          <td><?php echo $model->type;?></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><?php echo $model->status;?></td>
        </tr>
        <tr>
          <td>Picture</td>
          <td>
            <?php if($model->picture): ?>
            <img src="<?php echo base_url('uploads/picture/'.$model->picture);?>" width="200">
            <?php else: ?>
            No Image
            <?php endif; ?>
          </td>
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

<div class="row">
  <div class="col-md-6">
    <h3>Tabel Komponen</h3>
  </div>
  <div class="col-md-6">
    <h3>Tabel Gangguan</h3>
  </div>
  <div class="col-md-6">
    <a href="<?php echo site_url('komponen/insert/'.$model->id);?>" class="btn btn-primary">Insert Komponen</a>
  </div>
  <div class="col-md-6">
    <a href="<?php echo site_url('gangguan/insert/'.$model->id);?>" class="btn btn-primary">Insert Gangguan</a>
  </div>
</div>
<br />
<div class="row">
  <div class="col-md-6">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Specification</th>
          <th>Perangkat</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if($komponen): ?>
        <?php foreach($komponen as $row): ?>
        <tr>
          <td><?php echo $row->name; ?></td>
          <td><?php echo $row->spec; ?></td>
          <td><?php echo $row->perangkat_name; ?></td>
          <td>
            <a href="<?php echo site_url('komponen/view/'.$model->id.'/'.$row->id);?>" class="btn btn-xs btn-success">view</a>
            <a href="<?php echo site_url('komponen/update/'.$model->id.'/'.$row->id);?>" class="btn btn-xs btn-primary">edit</a>
            <a href="<?php echo site_url('komponen/delete/'.$model->id.'/'.$row->id);?>" onclick="return confirm('Are you sure want delete this data?')" class="btn btn-xs btn-danger">delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
        <tr>
          <td colspan="5">Data not found</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
  <div class="col-md-6">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Deskripsi Gangguan</th>
          <th>Rencana Tindakan</th>
          <th>Eksekusi</th>
          <th>Keterangan</th>
          <th>Perangkat</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if($gangguan): ?>
        <?php foreach($gangguan as $row): ?>
        <tr>
          <td><?php echo $row->deskripsi_gangguan; ?></td>
          <td><?php echo $row->rencana_tindakan; ?></td>
          <td><?php echo $row->eksekusi; ?></td>
          <td><?php echo $row->keterangan; ?></td>
          <td><?php echo $row->perangkat_name; ?></td>
          <td>
            <a href="<?php echo site_url('gangguan/view/'.$model->id.'/'.$row->id);?>" class="btn btn-xs btn-success">view</a>
            <a href="<?php echo site_url('gangguan/update/'.$model->id.'/'.$row->id);?>" class="btn btn-xs btn-primary">edit</a>
            <a href="<?php echo site_url('gangguan/delete/'.$model->id.'/'.$row->id);?>" onclick="return confirm('Are you sure want delete this data?')" class="btn btn-xs btn-danger">delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
        <tr>
          <td colspan="6">Data not found</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>