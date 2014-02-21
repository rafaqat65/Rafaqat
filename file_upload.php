
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery_form.js"></script>

<script>
  $(document).ready(function() {
	     
     $('#logoImg').live('change', function(){
		    alert('djkcjjkckjkcckk');
		$('#YNUpload').val("1");
		$('#uploadLogoImg').ajaxForm({
			target: '#logoThumbnailBox',
			/*success: function(){
				$('#logoImgUpload').parent().show();
			}
			*/
		}).submit();
  });
  });
</script>
            <div id="logoThumbnailBox">
             
            </div>
            
                        
                        <form name="uploadLogoImg" class="forms" action="includes/fileUpload.php" enctype="multipart/form-data" method="POST" id="uploadLogoImg">
								<p style="overflow:visible;">
									<input name="logo_company_id" type="hidden" id="logo_company_id" value="<?php echo $thisCompanyId; ?>" style="">
<!--									<input id="logoImgPath" type="text" style="display:none;margin-right:10px;width:145px;">
									<input id="logoImgLink" type="button" value="Select your Logo Image" class="saveButton">
									<input id="logoImg" name="logoImg" type="file" style="display:none;">
									<input id="YNUpload" name="YNUpload" style="display:none;" value="0" type="text"> -->
                                    
                                    <input id="logoImgPath" type="text" style="margin-right:10px;width:145px;">
									<input id="logoImgLink" type="button" value="Select your Logo Image" class="saveButton">
									<input id="logoImg" name="logoImg" type="file" style="">
									<input id="YNUpload" name="YNUpload" style="" value="0" type="text"> 
								</p>
<!--								<p style="overflow:visible;display:none;">
									<input type="button" value="Upload" id="logoImgUpload">
								</p> -->
                                
                                <p style="overflow:visible;">
									<input type="button" value="Upload" id="logoImgUpload">
								</p>
                                
							</form>
                            
                            
                            
                            