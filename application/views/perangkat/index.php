<div class="row">
  <div class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="#">Depan</a></li>
      <li><a href="#">Perangkat</a></li>
      <li class="active">index</li>
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
  
  <div class="col-md-12">
    <a href="<?php echo site_url('perangkat/insert');?>" class="btn btn-primary">Insert Data</a>
  </div>
</div>
<div class="clearfix"> <br></div>

<div class="row">
  <div class="col-md-12">Silahkan Pilih Tipe Perangkat yang akan ditampilkan</div>

  <form method="get" action="<?php echo site_url('perangkat');?>">
  <div class="col-md-4">
    <div class="form-group">
      <select class="form-control" id="type" name="type">
        <option></option>
        <option value="laptop" <?php echo selected_combobox('laptop', $type);?>>Laptop</option>
        <option value="komputer" <?php echo selected_combobox('komputer', $type);?>>Komputer</option>
        <option value="tinkpad" <?php echo selected_combobox('tinkpad', $type);?>>Tinkpad</option>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <button type="submit" class="btn btn-primary"> Tampil</button>
  </div>
  </form>
</div>

<?php if($type): ?>
<div class="row">
  <div class="col-md-12">
    <h3>Tabel Perangkat</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Type</th>
          <th>Status</th>
          <th>Picture</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if($models): ?>
        <?php $no=1; foreach($models as $row): ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row->name; ?></td>
          <td><?php echo $row->type; ?></td>
          <td><?php echo $row->status; ?></td>
          <td>
            <?php if($row->picture): ?>
            <img src="<?php echo base_url('uploads/picture/'.$row->picture);?>" alt="<?php echo $row->picture;?>" height="70px" width="70px">
            <?php else: ?>
            <img src="<?php echo base_url('uploads/default/no-image.jpg');?>" alt="<?php echo $row->picture;?>" height="70px" width="70px">
            <?php endif; ?>
          </td>
          <td>
            <a href="<?php echo site_url('perangkat/view/'.$row->id);?>" class="btn btn-xs btn-success">view</a>
            <a href="<?php echo site_url('perangkat/update/'.$row->id);?>" class="btn btn-xs btn-primary">edit</a>
            <a href="<?php echo site_url('perangkat/delete/'.$row->id);?>" onclick="return confirm('Are you sure want delete this data?')" class="btn btn-xs btn-danger">delete</a>
          </td>
        </tr>
        <?php $no++; endforeach; ?>
        <?php else: ?>
        <tr>
          <td colspan="6">Data not found</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
<?php endif; ?>