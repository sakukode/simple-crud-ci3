<div class="row">
  <div class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="#">Depan</a></li>
      <li><a href="#">Komponen</a></li>
      <li class="active">index</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <?php echo $this->session->flashdata('message_success'); ?>  
  </div>

  <div class="col-md-12">
    <?php echo $this->session->flashdata('message_danger'); ?>  
  </div>
  
  <div class="col-md-12">
    <a href="<?php echo site_url('komponen/insert');?>" class="btn btn-primary">Insert Data</a>
  </div>
</div>
<div class="clearfix"> <br></div>
<div class="row">
  <div class="col-md-12">
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
        <?php if($models): ?>
        <?php foreach($models as $row): ?>
        <tr>
          <td><?php echo $row->name; ?></td>
          <td><?php echo $row->spec; ?></td>
          <td><?php echo $row->perangkat_name; ?></td>
          <td>
            <a href="<?php echo site_url('komponen/view/'.$row->id);?>" class="btn btn-xs btn-success">view</a>
            <a href="<?php echo site_url('komponen/update/'.$row->id);?>" class="btn btn-xs btn-primary">edit</a>
            <a href="<?php echo site_url('komponen/delete/'.$row->id);?>" onclick="return confirm('Are you sure want delete this data?')" class="btn btn-xs btn-danger">delete</a>
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
</div>