<form method="post" id="image_form" align="center" enctype="multipart/form-data"> 
  <div class="col-md-10 form-normal form-horizontal clearfix">


    <div class="row form-group">
      <div class="col-sm-4 control-label col-xs-12">
        <label class="required" for="varchar">Favicon </label>
      </div>
      <div class="col-md-8 col-xs-12" data-toggle="tooltip" title="Favicon">
        <input type="file" class="btn btn-primary" name="favicon" id="favicon" placeholder="Favicon" value="<?php echo $favicon; ?>" required/>
        <?php echo form_error('favicon') ?>

        <div id="uploaded_image"></div>   
      </div>
    </div>

    <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button> 
    <input type="hidden" name="id_site" value="<?php echo $id_site; ?>" /> 
    <a href="<?php echo site_url('setting') ?>" class="btn btn-default pull-right">Cancel</a>
  </div></form>


  <script>  
   $(document).ready(function(){  
    $('#image_form').on('submit', function(e){  
     e.preventDefault();  
     if($('#image_file').val() == '')  
     {  
       swal({
        title: 'Error!',
        text: 'Silahkan pilih gambar terlebih dahulu',
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
            text: 'Favicon website berhasil di Perbaharui',
            type: 'success',
            confirmButtonText: 'Oke'
          });
        } 

      });  
    }  
  });  
  });  
</script>  