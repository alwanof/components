<!DOCTYPE html>
<html>
<head>
	<title>Image lab</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
				
				<form id="foo" action="upload.php" method="post"> <!-- 1-id -->
					<div class="custom-file mt-3">
						<input type="file" class="custom-file-input control" name="control"  accept="image/*"><!-- 2-control -->
						<label class="custom-file-label target" for="customFile" ><!-- 3-target -->
							<img  src="loader.gif" class="icon" height="32px" style="display: none;"><!-- 4-icon -->
						</label>
					</div>
					<div class="progress" style="height: 3px;display: none;"><!-- 5-progress -->
						<div class="progress-bar bg-success" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div><!-- 6-progresso -->
					</div>
				</form>
				<hr>
				<form id="moo" action="upload.php" method="post"> <!-- 1-id -->
					<div class="custom-file mt-3">
						<input type="file" class="custom-file-input control" name="control"  accept="image/*"><!-- 2-control -->
						<label class="custom-file-label target" for="customFile" ><!-- 3-target -->
							<img  src="loader.gif" class="icon" height="32px" style="display: none;"><!-- 4-icon -->
						</label>
					</div>
					<div class="progress" style="height: 3px;display: none;"><!-- 5-progress -->
						<div class="progress-bar bg-success" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div><!-- 6-progresso -->
					</div>
				</form>



			</div>
		</div>
	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="jquery.form.js"></script>
	<script>
	
		var doFunc=function(event){
			if($('#'+event.data.idKey+' .control').val())
				{
					event.preventDefault();
					$('#'+event.data.idKey+' .icon').show();
					$('#'+event.data.idKey+' .progress').show();
					$("#"+event.data.idKey).ajaxSubmit({
						target: '#'+event.data.idKey+' .target',
						beforeSubmit:function(){
							$('#'+event.data.idKey+' .progress-bar').width('0%');
						},
						uploadProgress: function(percentageComplete)
						{
							$('#'+event.data.idKey+' .progress-bar').animate({
								width: percentageComplete + '%'
							}, {
								duration: 1000
							});
						},
						success:function(){
							$('#'+event.data.idKey+' .icon').hide();
							$('#'+event.data.idKey+' .progress-bar').width('100%');
						},	
						resetForm: true
					});
				}
				return false;
		}

		$(document).ready(function(){

			$('#foo').change({idKey: "foo"},doFunc);
			$('#moo').change({idKey: "moo"},doFunc);

			
		});


	</script>
</body>
</html>