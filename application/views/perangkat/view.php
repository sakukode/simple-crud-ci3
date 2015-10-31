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
          <td></td>
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