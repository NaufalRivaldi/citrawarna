<h4><?= $title ?></h4>
<hr>
<form action="<?= base_url($form_action) ?>" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12">
			Nama Barang
            <input type="text" class="form-control" id="merk"  value="<?= $input['kd_merk'] ?>">
            <input type="hidden" name="kd_merk" id="kd_merk" value="<?= $input['kd_merk'] ?>">
            <div id="merk-list"></div>
		</div>
		<div class="col-md-12">
			Detail Barang :
			<textarea class="form-control" name="detail_teks"><?= $input['detail_teks'] ?></textarea>
		</div>
        <div class="col-md-12">
            Foto CC
            <input type="file" class="form-control-file" name="cc" value="<?= $input['cc'] ?>">
        </div>
		
		<div class="col-md-12">
		<br>
			<input type="submit" class="btn btn-primary btn-block" value="Simpan">
		</div>
	</div>
</form>

<script>
	 CKEDITOR.replace( 'detail_teks' );

     $(document).ready(function(e){
         $('#merk').keyup(function(){
             var merk = $(this).val();
             if(merk != ''){
                 $.ajax({
                     url:"<?= base_url('crud/search_produk') ?>",
                     method:"GET",
                     data:{data:merk},
                     success:function(data){
                         $('#merk-list').fadeIn();
                         $('#merk-list').html(data);
                     }
                 });
             }
         });
     });
    $(document).on('click', 'li', function(){
        $('#merk').val($(this).text());
        var kd_merk = $('input[id="merk"]').val();
        newMerk = kd_merk.split(" ");
        $('#kd_merk').val(newMerk[0]);
        $('#merk-list').fadeOut();
    });

    $("body").mouseup(function(e){
        if($(e.target).closest('#merk').length==0){
            $('#merk-list').stop().fadeOut();
        }
    });

</script>

