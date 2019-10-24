var placeID=null;
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width:300,
                height:170,
                type:'square' //square
            },
            boundary:{
                width:310,
                height:180
            },

        });

        $('.crop_image').click(function(event){
                $image_crop.croppie('result', {
                    type: 'canvas',
                    size:{
                        width:1200,
                        hidden:675
                    },
                    format:'jpeg',
                    quality:0.7
                }).then(function(response){
                    //var rand=Math.floor(Math.random()*1000000);
                    $.ajax({
                        url:"{{url('/')}}"+"/upload.php?title="+"{{$hash}}",
                        type: "POST",
                        data:{"image": response},
                        success:function(data)
                        {
                            $('#uploadimageModal').modal('hide');
                            $(placeID).html(data);

                        }
                    });
                })
            });

        function canvasArea(areaID,placeHolder){
            placeID=placeHolder;
            var reader = new FileReader();
            reader.onload = function (event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }

            reader.readAsDataURL(areaID.files[0]);
            $('#uploadimageModal').modal('show');

        }

        $('#upload_image').on('change', function(){
				canvasArea(this,'#placeholder');
			});
