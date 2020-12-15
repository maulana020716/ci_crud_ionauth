<div class="jumbotron">
      <h1><?php echo lang('change_password_heading');?></h1>

      <div id="infoMessage"><?php echo $message;?></div>

      <?php echo form_open("auth/change_password");?>
            <div class="form-group">
                  <label for="password"><?php echo lang('change_password_old_password_label', 'old_password');?></label>
                  <input type="password" class="form-control" id="password" name="old_password">
            </div>
            <div class="form-group">
                  <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
                  <input type="password" class="form-control" id="new_password" name="new_password">
            </div>
            <div class="form-group">
                  <label for="new_password_confirm"><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?></label>
                  <input type="password" class="form-control" id="new_password_confirm" name="new_password_confirm">
            </div>

            <?php echo form_input($user_id);?>
            <button type="submit" class="btn btn-primary"><?php echo form_submit('submit', lang('change_password_submit_btn'));?></button>
            <p></p>

      <?php echo form_close();?>
</div>

