<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from tympanus.net/Tutorials/FullscreenBookBlock/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jan 2018 18:09:58 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullscreen Pageflip Layout with BookBlock</title>
    <meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
    <meta name="keywords" content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="https://tympanus.net/Tutorials/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.custom.css" />
    <link rel="stylesheet" type="text/css" href="css/bookblock.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <script src="js/modernizr.custom.79639.js"></script>
    <script type="text/javascript">
        // Don't use this code on your site
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7243260-2']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <style>
        #codrops-ad-wrapper {top: 10px !important; right: 40px !important;}
    </style>
</head>
<body>
<div id="container" class="container">

    <div class="menu-panel">
        <h3>Table of Contents</h3>
        <ul id="menu-toc" class="menu-toc">
            @foreach($news as $latest)

                <li class="menu-toc-current"><a href="#item">{{$latest['title']}}</a></li>

            @endforeach

        </ul>
        <div>
            <a href="http://tympanus.net/Development/AudioPlayer/">&larr; Previous Demo: Responsive Audio Player</a>
            <a href="http://tympanus.net/codrops/?p=12795">Back to the Codrops Article</a>
        </div>
    </div>

    <div class="bb-custom-wrapper">
        <div id="bb-bookblock" class="bb-bookblock">
            $count = 1;
                        <h2>Latest News</h2>
                        @if (count($news) > 0)
                            @foreach($news as $latest)

                    <div class="bb-item" id="item.$count">
                        <div class="content">
                            <div class="scroller">
                                @if($latest['urlToImage'] != NULL)
                                    <div class="item">
                                        <div class="animate-box">
                                            <a href="{{$latest['urlToImage']}}" class="image-popup fh5co-board-img" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, eos?"><img src="{{$latest['urlToImage']}}" style="margin-left: 20%" height="400px"  alt="Free HTML5 Bootstrap template"></a>
                                        </div>
                                        <h4 style="margin-left: 20%">{{$latest['title']}}</h4>
                                        <div style="margin-left: 20%" class="fh5co-desc">{{ str_limit ($latest['description'],54 , '...' )}} <a href="{{$latest['url']}}" >Read more</a></div>

                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                            @endforeach
                        @else
                            <div class="fh5co-desc">No result found </div>
                        @endif








        </div>

        <nav>
            <span id="bb-nav-prev">&larr;</span>
            <span id="bb-nav-next">&rarr;</span>
        </nav>

        <span id="tblcontents" class="menu-button">Table of Contents</span>

    </div>

</div><!-- /container -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/jquery.jscrollpane.min.js"></script>
<script src="js/jquerypp.custom.js"></script>
<script src="js/jquery.bookblock.js"></script>
<script src="js/page.js"></script>
<script>
    $(function() {

        Page.init();

    });
</script>
<script src="../../codrops/adpacks/demoad.js"></script>
</body>

<!-- Mirrored from tympanus.net/Tutorials/FullscreenBookBlock/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jan 2018 18:10:14 GMT -->
</html>
