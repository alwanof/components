<!DOCTYPE html>
<html>
<head>
	<title>Image lab</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css">
</head>
<body>
	<div class="container p-5">
		<h3 align="center">Image Crop & Upload using JQuery with PHP Ajax</h3>
		<hr>
		<div class="card col-lg-4 p-0">
			<div class="card-header">
				Select Profile Image
			</div>
			<div class="card-body text-center">
				<div class="cropU">
					<div id="placeholder">
						<img src="uploads/0.png" class="img-thumbnail rounded-circle" />
					</div>
					<label class="btn btn-primary mt-2">
					    Browse <input type="file" class="custom-file-input upload_image" name="upload_image" id="upload_image" accept="image/*" hidden>
					</label>
					
				</div>

			</div>
		</div>

		<div class="card col-lg-4 p-0">
			<div class="card-header">
				Select Profile Image
			</div>
			<div class="card-body text-center">
				<div class="cropU">
					<div id="placeholder2">
						<img src="uploads/0.png" class="img-thumbnail rounded-circle" />
					</div>
					<label class="btn btn-primary mt-2">
					    Browse <input type="file" class="custom-file-input upload_image" name="upload_image2" id="upload_image2" accept="image/*" hidden>
					</label>
					
				</div>

			</div>
		</div>


		
		
	</div>

	<!-- The Modal -->
	<div id="uploadimageModal" class="modal" role="dialog">
		<div class="modal-dialog" style="max-width: : 400px !important;">
			<div class="modal-content">
				<div class="modal-header">
					 <h4 class="modal-title">Upload & Crop Image</h4>
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
					
				</div>
				<div class="modal-body">
					
						<div class="text-center" style="">
							<div id="image_demo" style="width:320px; margin: 24px auto !important;"></div>
						</div>
						
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success crop_image" data-dismiss="modal">Crop & Upload Image</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js"></script>

	<script src="cropConfig.js"></script>

	<script>
		$(document).ready(function(){
			
			$('#upload_image').on('change', function(){
				canvasArea(this,'#placeholder');
			});

			$('#upload_image2').on('change', function(){
				canvasArea(this,'#placeholder2');
			});
	

			
		});


	</script>
</body>
</html>