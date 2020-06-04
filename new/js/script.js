$(function(){
	$('#file').change(function(){
		console.log(this,'this');
		console.log($('#file').get(0).files[0]);
		var file=this.files[0];		
		var imagetype=file.type;
		var extentions=["image/jpeg","image/png","image/jpg","image/gif"];		
		if(extentions.includes(file['type']) > 0){
			//alert(extentions.indexOf(imagetype));
			Materialize.toast('File Is Valid!', 2000, 'green');			
			var filereader=new FileReader();
			filereader.onload=FileLoadCheck;
			filereader.readAsDataURL(this.files[0]);
			FileUploadAjaxCall();
			$('.img-responsive').show();
		}else{
			//alert(extentions.indexOf(imagetype));
			Materialize.toast('File Is Invalid!', 5000, 'red');
			Materialize.toast('Please upload image files only (jpeg/jpg, png, or gif)', 5000);
			$('#previewImage').attr('src','images/images.png');
			return false;
		}
	});
	function FileLoadCheck(e){
		console.log(e,'Object');
		$('#previewImage').attr('src',e.target.result);
		//$('.card-panel').append('<img src='+e.target.result+' class="img-responsive" id="previewImage">')
	}
	
});
function FileUploadAjaxCall(){	
	$.ajax({
		url:'fileupload.php?_'+new Date().getTime(),
			type:'POST',
			data:new FormData($('#UploadMedia').get(0)),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data){
				console.log(data,'data');
				Materialize.toast('File Uploaded Successfully!', 5000);
			}
		});
}
