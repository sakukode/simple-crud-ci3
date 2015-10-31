<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project name</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url();?>">Depan</a></li>
        <?php if($this->session->userdata('level') == "admin"): ?>
        <li><a href="<?php echo site_url('perangkat');?>">Perangkat</a></li>
        <li><a href="<?php echo site_url('komponen');?>">Komponen</a></li>
        <li><a href="<?php echo site_url('gangguan');?>">Gangguan</a></li>
        <?php endif; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username');?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('user/logout');?>">Logout</a></li>
          </ul>
        </li>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
</nav>