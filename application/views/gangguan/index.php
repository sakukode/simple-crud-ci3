<div class="row">
  <div class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="#">Depan</a></li>
      <li><a href="#">Gangguan</a></li>
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
    <a href="<?php echo site_url('gangguan/insert');?>" class="btn btn-primary">Insert Data</a>
  </div>
</div>
<div class="clearfix"> <br></div>
<div class="row">
  <div class="col-md-12">
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
        <?php if($models): ?>
        <?php foreach($models as $row): ?>
        <tr>
          <td><?php echo $row->deskripsi_gangguan; ?></td>
          <td><?php echo $row->rencana_tindakan; ?></td>
          <td><?php echo $row->eksekusi; ?></td>
          <td><?php echo $row->keterangan; ?></td>
          <td><?php echo $row->perangkat_name; ?></td>
          <td>
            <a href="<?php echo site_url('gangguan/view/'.$row->id);?>" class="btn btn-xs btn-success">view</a>
            <a href="<?php echo site_url('gangguan/update/'.$row->id);?>" class="btn btn-xs btn-primary">edit</a>
            <a href="<?php echo site_url('gangguan/delete/'.$row->id);?>" onclick="return confirm('Are you sure want delete this data?')" class="btn btn-xs btn-danger">delete</a>
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