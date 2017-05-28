<form method="post" id="avatar_form" align="center" enctype="multipart/form-data"> 
  <div class="col-md-10 form-normal form-horizontal clearfix">


    <div class="row form-group">
      <div class="col-sm-4 control-label col-xs-12">
        <label class="required" for="varchar">Icon </label>
    </div>
    <div class="col-md-8 col-xs-12" data-toggle="tooltip" title="Icon">
        <input type="file" class="btn btn-primary" name="image" id="image" placeholder="Foto Profile" value="<?php echo $image; ?>" required/>
        <?php echo form_error('image') ?>

        <div id="uploaded_image"></div>   
    </div>
</div>

<button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button> 
<input type="hidden" name="id_category_sub" value="<?php echo $id_category_sub; ?>" /> 
<a href="<?php echo site_url('category') ?>" class="btn btn-default pull-right">Cancel</a>
</div></form>


<script>  
 $(document).ready(function(){  
    $('#avatar_form').on('submit', function(e){  
       e.preventDefault();  
       if($('#image_file').val() == '')  
       {  
         swal({
            title: 'Error!',
            text: 'Silahkan pilih icon terlebih dahulu',
            type: 'error',
            confirmButtonText: 'Kembali'
        });
     }  
     else  
     {  
      $.ajax({  
        url:"<?php echo $action; ?>",  
        method:"POST",  
        data:new FormData(this),  
        contentType: false,  
        cache: false,  
        processData:false,  
        success:function(data)  
        {  
          $('#uploaded_image').html(data);  
          swal({
            title: 'Sukses!',
            text: 'Icon Tag berhasil di Perbaharui',
            type: 'success',
            confirmButtonText: 'Oke'
        });
      }  
  });  
  }  
});  
});  
</script>  