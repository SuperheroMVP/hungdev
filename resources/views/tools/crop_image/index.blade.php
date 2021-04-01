<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Upload & CropImage</title>
    @php
        $sc_template ='themes/crop_image';
    @endphp
    <link rel="stylesheet" href="{{ asset($sc_template.'/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset($sc_template.'/css/cropper.css')}}">
    <link rel="stylesheet" href="{{ asset($sc_template.'/fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset($sc_template.'/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset($sc_template.'/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{ asset($sc_template.'/css/notificationManager.css')}}" />
    <link rel="stylesheet" href="{{ asset($sc_template.'/css/style_main.css')}}">
</head>
<body>
<header class="bg-main">
    <div class="container">
        <div class="header-menu">
            <div class="logo">
                <a href="{{route('crop_image')}}" onclick="location.reload()">Hitech</a>
            </div>
            <div class="name_function">
                <h3>EASY CROP IMAGE</h3>
            </div>
            <div class="menu-right">
                <ul>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Blog</a></li>
                    {{-- 						<li>
                                                <form method="post" id="upload_form" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                       <label for="select_file"><i class="fa fa-upload" aria-hidden="true"></i></label>
                                                       <input type="file" name="select_file" id="select_file" style="display: none;" />
                                                    </div>
                                                </form>
                                            </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <div id="notificationsContainer"></div>
</header>
<div class="content-introduce">
    {{-- 		<div class="box-show-video">
                <p style="margin-bottom: 0px!important;">
                    <iframe width="800" height="450" src="https://www.youtube.com/embed/bjNg_Q9cp0E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </p>
            </div> --}}
    <div class="d-flex justify-content-center text-center" id="upload_form" style="margin-top: 20px;">
        <form method="post" id="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="area-upload">
                <div class="content-area-upload">
                    <label for="select_file" class="upload-icon color-main"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
                    <p class="color-main">Choose a photo type jpg, jpeg, png</p>
                    <input type="file" name="select_file" id="select_file" style="display: none;" />
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <div class="box-show-image row">
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset($sc_template.'/images/image_example.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="content-working">
    <div class="container mb-4" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-4">
                <div class="back_page color-main" onclick="location.reload();">
                    <i class="fa fa-backward" aria-hidden="true"></i><span>Back</span>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <div class="image_download color-main" onclick="downloadImage()" id="image_download" style="display: none;">
                    <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                    <p class="color-main" style="font-size: 10px;margin-bottom:0px!important;">Download Image</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5" style="margin-top: 10px;">
                <img src="" class="img-fluid" id="image_src" alt="image_src" style="display: none;" >
                <div class="list-bg-thumb" style="display: none; margin-top: 15px;">
                    <ul class="thumb">
                        <li onclick="changeBgImage(this)">
                            <div class="none_image" style="width: 60px;height: 60px;border:3px solid #eadddd;"></div>
                            <p class="text-center name-iframe">None</p>
                        </li>
                        <div class="list-iframe-use">
                            <li onclick="changeBgImage(this)">
                                {{-- 	<img src="https://tranhdantuong.tk/data/product/white-large.svg"> --}}
                                <img src="{{ asset($sc_template.'/images/white-large.png')}}" class="image-frame">
                                <p class="text-center name-iframe">White</p>
                            </li>
                            <li onclick="changeBgImage(this)">
                                <img src="{{ asset($sc_template.'/images/black-large.png')}}" class="image-frame">
                                <p class="text-center name-iframe">Black</p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                {{-- 					<div class="before-review" style="margin-top: 20px;">
                                        <p class="color-main">Choose a photo frame for the photo and download it</p>
                                    </div> --}}
                <div id="uploaded_image" class="text-center dom-to-image" style="display: none;position: relative;display: inline-block;">
                    <img src="{{ asset($sc_template.'/images/black-large.png')}}" id="iframe_image"></img>
                    <img src="" class="img-fluid" id="image_add_ifame" alt="image_add_ifame" style="display: block;" >
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    {{-- 			      	<div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Crop Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div> --}}
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <div class="col-md-8">
                                    <img class="img-fluid" src="" id="sample_image" />
                                </div>
                                <div class="col-md-4">
                                    <div style="height: 300px;">
                                        <div class="preview"></div>
                                    </div>
                                    <div class="data-crop">
                                        <div class="input-group input-group-sm">
								            <span class="input-group-prepend">
								              <label class="input-group-text" for="dataWidth">Width</label>
								            </span>
                                            <input type="text" class="form-control" id="dataWidth" disabled="disabled" placeholder="width">
                                            <span class="input-group-append">
								              <span class="input-group-text">px</span>
								            </span>
                                        </div>
                                        <div class="input-group input-group-sm">
								            <span class="input-group-prepend">
								              <label class="input-group-text" for="dataHeight">Height</label>
								            </span>
                                            <input type="text" class="form-control" id="dataHeight" disabled="disabled" placeholder="height">
                                            <span class="input-group-append">
								              <span class="input-group-text">px</span>
								            </span>
                                        </div>
                                    </div>
                                    <div class="btn-choose-cavas">
                                        <button type="button" id="get_cavas" onclick="getCavas(1)" value="1" class="btn btn-primary"><i class="fa fa-crop" aria-hidden="true"></i>1:1</button>
                                        <button type="button" id="get_cavas" onclick="getCavas(4/3)" value="4/3" class="btn btn-primary"><i class="fa fa-crop" aria-hidden="true"></i>4/3</button>
                                        <button type="button" id="get_cavas" onclick="getCavas(3/4)" value="3/4" class="btn btn-primary"><i class="fa fa-crop" aria-hidden="true"></i>3/4</button>
                                        <button type="button" id="get_cavas" onclick="getCavas(16/9)" value="16/9" class="btn btn-primary"><i class="fa fa-crop" aria-hidden="true"></i>16/9</button>
                                        <button type="button" id="get_cavas" onclick="getCavas(NaN)" value="NaN" class="btn btn-primary"><i class="fa fa-crop" aria-hidden="true"></i>Free</button>
                                    </div>
                                    <div class="modal-footer2">
                                        <button type="button" class="btn btn-danger" id="close_model" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
                                        <button type="button" id="crop"  class="btn btn-primary"><i class="fa fa-crop" aria-hidden="true"></i> Crop Image</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset($sc_template.'/js/jquery-3.6.0.js')}}"></script>
<script src="{{ asset($sc_template.'/js/popper.min.js')}}"></script>
<script src="{{ asset($sc_template.'/js/bootstrap.min.js')}}"></script>
<script src="{{ asset($sc_template.'/js/dom-to-image.js')}}"></script>
<script src="{{ asset($sc_template.'/js/cropper.js')}}"></script>
<script type="text/javascript" src="{{ asset($sc_template.'/slick/slick.min.js')}}"></script>
<script src="{{ asset($sc_template.'/js/notificationManager.js')}}"></script>

<script type="text/javascript">

    var dataHeight = document.getElementById('dataHeight');
    var dataWidth = document.getElementById('dataWidth');
    $(document).bind('keydown', 'ctrl+s', function(e) {
        e.preventDefault();
        return false;
    });
    $(document).bind('keydown', 'ctrl+u', function(e) {
        e.preventDefault();
        return false;
    });
    document.addEventListener('contextmenu', event => event.preventDefault());
    function getCavas(type)
    {
        cropper.destroy();
        cropper.reset();

        var image = document.getElementById('sample_image');

        cropper = new Cropper(image, {
            aspectRatio: type,
            viewMode: 3,
            preview:'.preview',
            crop(event) {
                dataHeight.value = Math.round(event.detail.width);
                dataWidth.value = Math.round(event.detail.height);
            },
        });

    }
    function changeBgImage(event)
    {
        //console.log(event.children[0].src);
        if(typeof(event.children[0].src)=='undefined')
        {
            //Kieu nay click khong co khong anh
            let change_border = document.querySelector('.none_image');
            change_border.style.border = "2px solid #d4a073";

            //document.getElementById('image_add_ifame').style.display="block";
            //document.querySelector('.image_download').style.display="block";
            document.getElementById('iframe_image').style.display="none";

            const thumbs = document.querySelector(".list-iframe-use").children;

            for(let i = 0;i<thumbs.length;i++)
            {
                thumbs[i].children[0].classList.remove("active");
            }

            //	document.querySelector('.before-review').style.display="none";
        }
        else
        {
            //Kieu nay danh cho c�c th&#7867; image c� src la khung vien
            let change_border2 = document.querySelector('.none_image');
            change_border2.style.border = "2px solid #eadddd";

            const thumbs = document.querySelector(".list-iframe-use").children;
            //console.log(thumbs);

            document.getElementById('iframe_image').style.display="block";
            document.getElementById('iframe_image').src=event.children[0].src;
            //document.getElementById('image_add_ifame').style.display="block";

            //document.querySelector('.image_download').style.display="block";

            //document.querySelector('.before-review').style.display="none";

            // delete class active
            for(let i = 0;i<thumbs.length;i++)
            {
                thumbs[i].children[0].classList.remove("active");
                event.children[0].classList.add("active");
            }
        }
    }
    function downloadImage()
    {
        var x = confirm("Are you sure download image?");
        if(x)
        {
            var node = document.querySelector('.dom-to-image');

            domtoimage.toPng(node)
                .then(function (dataUrl) {
                    var img = new Image();
                    img.src = dataUrl;
                    downloadURI(dataUrl, "records.png");

                })
                .catch(function (error) {
                    console.error('oops, something went wrong!', error);
                });
        }
    }
    function downloadURI(uri, name) {
        var notify = new notificationManager({container: $('#notificationsContainer'), position: "topright" });
        notify.addNotification(
            {
                message:'Thank you for using',
                animate:true,
                autoRemove:true,
                backgroundColor: "#d4a073",
                progressColor: "#fff"
            });
        setTimeout(function(){ location.reload();}, 5000);

        var link = document.createElement("a");
        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        delete link;
    }


    $(document).ready(function(){

        $('.content-working').css("display","none");

        $('.box-show-image').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay:true,
            arrows:true,
            autoplaySpeed:1000
        });

        $model = $('#myModal');
        var image = document.getElementById('sample_image');
        var fileTypes = ['jpg', 'jpeg', 'png'];  //acceptable file types
        let _token   = $('meta[name="csrf-token"]').attr('content');
        $('#select_file').change(function(event){

            var files = event.target.files;
            //console.log(files);
            //var done = function(url)
            function done(url){

                image.src = url;
                $model.modal({backdrop: 'static', show: true});
            };
            if(files && files.length > 0)
            {
                var extension = files[0].name.split('.').pop().toLowerCase(),  //file extension from input file
                    isSuccess = fileTypes.indexOf(extension) > -1;  //is extension in acceptable types
                if (isSuccess)
                {
                    reader = new FileReader();
                    reader.onload = function(event)
                    {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);//B&#7855;t &#273;&#7847;u &#273;&#7885;c n&#7897;i dung c&#7911;a blobOrFile, m&#7897;t khi ho�n th�nh, fileReader.result s&#7869; l� m&#7897;t URL &#273;&#7841;i di&#7879;n cho d&#7919; li&#7879;u &#273;&#7885;c &#273;&#432;&#7907;c.
                    $('.content-working').css("display","block");
                }
                else
                {

                    alert('Please choose Image');
                    $('.content-working').css("display","none");
                }
            }



        })

        $model.on('shown.bs.modal',function(){
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview:'.preview',
                crop(event) {
                    dataHeight.value = Math.round(event.detail.width);
                    dataWidth.value = Math.round(event.detail.height);
                },
            });
        }).on('hidden.bs.modal',function(){
            cropper.destroy();
            cropper = null;
        })

        $('#crop').click(function(){
            //kieu object
            $('.content-introduce').css("display","none");

            canvas = cropper.getCroppedCanvas({
                width:600,//chi&#7873;u r&#7897;ng &#273;�ch c&#7911;a canvas &#273;&#7847;u ra.
                height:600,
                maxWidth: 4096,
                maxHeight: 4096,
            });

            canvas.toBlob(function(blob){
                // url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function(){
                    var base64data = reader.result;
                    //console.log(base64data);
                    $.ajax({
                        url:"{{route('action_crop_image')}}",
                        method:"POST",
                        data:{
                            image:base64data,
                            _token: _token
                        },
                        success:function(data)
                        {
                            $model.modal('hide');

                            $('#uploaded_image').css('display', "inline-block");
                            $('#image_src').css('display', "block");
                            $('#image_src').attr('src', data);
                            $('.list-bg-thumb').css("display","block");

                            $('#image_add_ifame').attr('src', data);
                            $('#image_add_ifame').css('display', "block");
                            $('#image_download').css("display","block");

                            // $('.link_image_download').attr('href', data);

                        }
                    });

                };
            });
        })

        $('#close_model').click(function(){
            $('.content-introduce').css("display","block");
            cropper.destroy();
            cropper = null;
            $('#myModal').modal('hide');
            location.reload();
        })

    });
</script>
</body>
</html>
