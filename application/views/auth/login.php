<div class="jumbotron">
<form method="POST" action="login">
  <div class="form-group">
    <label for="exampleInputEmail1"><?php echo lang('login_identity_label', 'identity');?></label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="identity" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><?php echo lang('login_password_label', 'password');?></label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"><?php echo lang('login_remember_label', 'remember');?></label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
</form>
</div>

