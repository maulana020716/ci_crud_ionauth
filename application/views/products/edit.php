    <form method="post" action="<?php echo base_url('products/update/'.$product->id);?>">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label class="col-md-3">Judul</label>
                    <div class="col-md-9">
                        <input type="text" name="title" class="form-control" value="<?php echo $product->title; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label class="col-md-3">Deskripsi</label>
                    <div class="col-md-9">
                        <textarea name="description" class="form-control"><?php echo $product->description; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 pull-right">
                <input type="submit" name="Save" class="btn" value="Simpan">
            </div>
        </div>
        
    </form>