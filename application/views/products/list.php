<div class="jumbotron">
<div class="row">
        <div class="col-lg-12">           
            <h2>Produk        
                <div class="pull-right">
                   <a class="btn btn-primary" href="<?php echo base_url('products/create') ?>"> Tambah Data</a>
                </div>
            </h2>
         </div>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
          <tr>
              <th>Judul</th>
              <th>Deskripsi</th>
          <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
       <?php foreach ($data as $d) { ?>      
          <tr>
              <td><?php echo $d->title; ?></td>
              <td><?php echo $d->description; ?></td>          
          <td>
            <form method="DELETE" action="<?php echo base_url('products/delete/'.$d->id);?>">
             <a class="btn btn-info btn-xs" href="<?php echo base_url('products/edit/'.$d->id) ?>"><i class="fas fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            </form>
          </td>     
          </tr>
          <?php } ?>
      </tbody>
    </table>
    </div>
</div>    
    