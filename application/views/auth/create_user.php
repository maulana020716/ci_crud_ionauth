<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>



<div class="jumbotron">
<?php echo form_open("auth/create_user");?>
  <div class="form-group">
    <label for="fname"><?php echo lang('create_user_fname_label', 'first_name');?></label>
    <input type="text" class="form-control" id="fname" name="first_name">
  </div>
  <div class="form-group">
    <label for="lname"><?php echo lang('create_user_lname_label', 'last_name');?></label>
    <input type="text" class="form-control" id="lname" name="last_name" >
  </div>
  <?php 
  if($identity_column!=='email') { ?>
  <div class="form-group">
    <label for="identity"><?php echo lang('login_identity_label', 'identity');?></label>
    <input type="email" id="identity" class="form-control" name="identity" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-texampleInputEmailext text-muted">We'll never share your email with anyone else.</small>
  </div>
  <?php 
  }
  ?>
  <div class="form-group">
    <label for="company"><?php echo lang('create_user_company_label', 'company');?></label>
    <input type="text" class="form-control" id="company" name="company">
  </div>
  <div class="form-group">
    <label for="identity"><?php echo lang('create_user_email_label', 'email');?></label>
    <input type="email" id="identity" class="form-control" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-texampleInputEmailext text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="phone"><?php echo lang('create_user_phone_label', 'phone');?></label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><?php echo lang('login_password_label', 'password');?></label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="confirm_password"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
    <input type="password" class="form-control" name="password_confirm" id="confirm_password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close();?>
</div>

