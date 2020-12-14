<div class="jumbotron">
<form class="form-group" method="post" action="<?php echo base_url('productsCreate');?>">
  <div class="form-group">
    <label for="title">Judul</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="description">Deskripsi</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>