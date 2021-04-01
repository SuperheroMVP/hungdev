<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Download Video From URL">
    <meta name="author" content="Ansonika">
    <title>HungDev | Download Video From URL</title>

    <base href="{{ asset('')}}">
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    @php
      $sc_template ='themes/download_video';
    @endphp
    <!-- BASE CSS -->
    <link href="{{ asset($sc_template.'/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset($sc_template.'/css/menu.css')}}" rel="stylesheet">
    <link href="{{ asset($sc_template.'/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset($sc_template.'/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset($sc_template.'/css/custom.css')}}" rel="stylesheet">

    <!-- MODERNIZR MENU -->
    <script src="{{ asset($sc_template.'/js/modernizr.js')}}"></script>

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<nav>
    <ul class="cd-primary-nav">
        <li><a href="index.html" class="animated_link">Version 1</a></li>
        <li><a href="index-2.html" class="animated_link">Version 2</a></li>
        <li><a href="index-3.html" class="animated_link">Version 3</a></li>
        <li><a href="index-4.html" class="animated_link">File Attachment demo</a></li>
        <li><a href="about.html" class="animated_link">About Us</a></li>
        <li><a href="contacts.html" class="animated_link">Contact Us</a></li>
        <li><a href="https://1.envato.market/A6oJN" class="animated_link" target="_parent">Purchase Template</a></li>
    </ul>
</nav>
<!-- /menu -->

<div class="container-fluid">
    <div class="row row-height">
        <div class="col-xl-4 col-lg-4 content-left">
            <div class="content-left-wrapper">
{{--                <a href="index.html" id="logo"><img src="img/logo.png" alt="" width="45" height="45"></a>--}}

                <a href="{{route('download_video_url')}}" id="logo">HungDev</a>
                <div id="social">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->
                <div>
                    <figure><img src="img/info_graphic_1.svg" alt="" class="img-fluid" width="270" height="270"></figure>
                    <h2>Download Video Youtube From Url</h2>
                    <p>Easy Download Video Youtube From Url And Convert Mp3 Or Mp4 </p>
                    <a href="https://1.envato.market/A6oJN" class="btn_1 rounded yellow" target="_parent">Developer:HungDev</a>
                    <a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
                </div>
                <div class="copy">© 2020 HungDev</div>
            </div>
            <!-- /content-left-wrapper -->
        </div>
        <!-- /content-left -->
        <div class="col-xl-8 col-lg-8 content-right" id="start">
            <div id="wizard_container">
                <div id="top-wizard">
                    <span id="location"></span>
                    <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <form id="wrapped" method="post" enctype="multipart/form-data">
                    <input id="website" name="website" type="text" value="">
                    <!-- Leave for security protection, read docs for details -->
                    <div id="middle-wizard">
                        <div class="step">
                            <h2 class="section_title">Working Here</h2>
                            <h3 class="main_question">Paste a link youtube</h3>
                            <div class="form-group add_top_30">
                                <label for="name">link Youtube</label>
                                <input type="text" name="link" id="link" class="form-control required" onchange="getVals(this);">
                            </div>
                            <div id="info-video" class="mt-5 mb-5">
                                <div class="row">
                                    <div class=" col-lg-4 col-md-4">
                                        <img src="" alt="" class="img-fluid">
                                    </div>
                                    <div class=" col-lg-7 col-md-7">
                                        <ul class="list-info-video">
                                            <li>Name: <span>Noi Nay Co Anh</span></li>
                                            <li>View: <span>8000000 views</span></li>
                                            <li>Like: <span>8000000 likes</span></li>
                                            <li>Dislike: <span>8000000 Dislike</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <label>Type Download</label>
                            <div class="form-group radio_input">
                                <label class="container_radio mr-3">MP3
                                    <input type="radio" name="mp3" value="mp3">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">360 Mp4
                                    <input type="radio" name="360" value="360">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">480 Mp4
                                    <input type="radio" name="480" value="480">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">720 Mp4
                                    <input type="radio" name="720" value="720">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">1080 Mp4
                                    <input type="radio" name="1080" value="1080">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">4k Mp4
                                    <input type="radio" name="4k" value="4k">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
{{--                            <div class="form-group add_bottom_30 add_top_20">--}}
{{--                                <label>Upload Resume<br><small>(File accepted: .pdf, .doc/docx - Max file size: 150KB for demo limit)</small></label>--}}
{{--                                <div class="fileupload">--}}
{{--                                    <input type="file" name="fileupload" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="required">--}}
{{--                                </div>--}}
{{--                            </div>--}}


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mt-4 download-video">
                                        <button type="button" name="forward" class="btn btn_1">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /step-->
                    </div>
                </form>
            </div>
            <!-- /Wizard container -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->



<!-- COMMON SCRIPTS -->
<script src="{{ asset($sc_template.'/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset($sc_template.'/js/common_scripts.min.js')}}"></script>
<script src="{{ asset($sc_template.'/js/velocity.min.js')}}"></script>
<script src="{{ asset($sc_template.'/js/common_functions.js')}}"></script>
<script src="{{ asset($sc_template.'/js/file-validator.js')}}"></script>

<!-- Wizard script-->
<script src="{{ asset($sc_template.'/js/func_1.js')}}"></script>
<script type="text/javascript">

</script>

</body>
</html>
