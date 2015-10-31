<div class="col-md-4 col-md-offset-4">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Form Login</h3>
    </div>
    <?php if(validation_errors()): ?>
    <div class="panel-body">
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
    </div>
    <?php endif;?>
    <div class="panel-body">
      <form action="<?php echo site_url('user/login');?>" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo set_value('username');?>">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
</div>