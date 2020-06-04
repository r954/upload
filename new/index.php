<?php
include_once('links.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	h1 {font-size: 2.5rem;}
	</style>
</head>
<body align="center">
	<form method="post" enctype="multipart/form-data" id="UploadMedia">
		<div class="container-fluid">
			<div class="row">	
<div class="card-image">
					<h1>Documents Upload</h1>
					<span style="color: #6c757d!important;padding-top: 20px;font-size: 1.25rem;font-weight: 300;">Click "<b>SELECT FILE</b>"	to upload an image.</span>
					</div>			
				<div class="col s6 push-s3">
					<div class="card card-panel hoverable">
						<div class="card-image">
							<img src="images/images.png" class="img-responsive" id="previewImage" style="display:none;">
							<span class="card-title">Image Show Here</span>
						</div>
						<div class="card-content">
							<div class="file-field input-field">
								<div class="btn  btn-primary" style="background-color:#449d44; border-color: #398439;">
									<span>Select File</span>
									<input type="file" name="file[]" id="file" multiple>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Drop files here to upload">
								</div>
							</div>							
						</div>														
					</div>
				</div>								
			</div>				
		</div>	
	</form>
</body>
</html>