<?php if ($this->session->has_userdata('warning')) { ?>
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-exclamation-triangle"></i> <?php echo $this->session->flashdata('warning'); ?>
    </div>
<?php } else if ($this->session->has_userdata('false')) { ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-exclamation-triangle"></i> <?php echo $this->session->flashdata('false'); ?>
    </div>
<?php } else if ($this->session->has_userdata('true')) { ?>
    <div class="alert alert-primary alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-info"></i> <?php echo $this->session->flashdata('true'); ?>
    </div>
<?php } else if ($this->session->has_userdata('error')) { ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
<?php } ?>