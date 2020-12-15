<div class="jumbotron">
<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>
      <div class="form-group">
            <label for="group_name"> <?php echo lang('create_group_name_label', 'group_name');?></label>
            <input type="text" class="form-control" id="group_name" name="group_name">
      </div>
      <div class="form-group">
            <label for="description"> <?php echo lang('create_group_desc_label', 'description');?></label>
            <input type="text" class="form-control" id="description" name="description">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>

<?php echo form_close();?>
</div>
