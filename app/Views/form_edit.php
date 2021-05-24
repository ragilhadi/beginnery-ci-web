<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Membuat CRUD Input Gambar</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="<?=base_url('node_modules/ckeditor4/ckeditor.js');?>"></script>
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Content </h2>
            </div>
        </div>
    </div>
    <hr>
    <?=form_open_multipart(base_url('blog/edit'));?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
    			<div class="col-md-12">
    				<label>Judul</label>
    				<div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?=$artikel->id?>">
                   		 <input type="text" name="judul" class="form-control" value="<?=$artikel->judul?>"> 
                	</div>	
    			</div>
    			<div class="col-md-12">
    				<label>Description</label>
    				<div class="form-group">
                   		 <textarea name="isi" class="form-control"></textarea>
                	</div>	
    			</div>
                <div class="col-md-12">
                    <label>Photo</label><br/>
                    <?php
                        if (!empty($artikel->gambar)) {
                            echo '<img src="'.base_url("assets/images/$artikel->gambar").'" width="150">';
                        }
                    ?>
                    <div class="form-group">
                         <input type="file" name="file_upload" class="form-control"> 
                    </div>  
                </div>
    			<div class="col-md-12">
    				<div class="form-group">
                   		  <button class="btn btn-primary">Simpan</button> 
                	</div>	
    			</div>
    		</div>
    	</div>
    </div>
    <?= form_close(); ?>
</body>
</html>