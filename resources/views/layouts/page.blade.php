<!DOCTYPE html>
<html lang="es">

<head><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90563832-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-90563832-7');
</script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('meta')

    <title>@yield('title', 'Nomonhome')</title>

    <!-- Icon 16x16 -->
  <link rel="icon" type="image/png" sizes="240x240" href="{{asset('img/iconohome.png')}}">

    <!--  Webpack CSS -->
    <link href="{{asset('css/page.css')}}" rel="stylesheet">
     <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/r-2.2.1/datatables.min.css"/>

    <!-- Estilos del FancyBox -->
    <link href="{{asset('css/front/jquery.fancybox.css?v=2.1.5')}}" rel="stylesheet">

    <!-- FancyProductDesigner ORIGINAL -->
    <link href="{{asset('/vendor/fancy-product-designer/css/FancyProductDesigner-all.min.css')}}" rel="stylesheet">

    <!-- FancyProductDesigner MODIFICADO -->
    {{--<link href="{{asset('/vendor/fancy-product-designer/css/mod_FancyProductDesigner-all.min.css')}}" rel="stylesheet">--}}

    <!-- Tipo icono -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/front/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/front/icons.css')}}">
   
    <style id="fit-vids-style">
        .fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .fluid-width-video-wrapper iframe,
        .fluid-width-video-wrapper object,
        .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
       
    </style>
    
    @yield('css_configurator')
  <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '3bf981f5d5eb5f0adfbe50a6cdea4fc5dc6f944c';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>   
</head>

<body>
    <!-- PRELOADER -->
    <div style="display: none;" class="page-loader">
        <div style="display: none;" class="loader">Loading...</div>
    </div>
    <!-- /PRELOADER -->
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- PARTIALS IDIOMA -->
        @include('frontend.home.partials.idiomas')
        <!-- END PARTIALS IDIOMA -->
        <!-- NAVIGATION MENU PARTIALS -->
        @include('frontend.home.partials.menu')
        <!-- /END NAVIGATION -->
        @yield('content')
        <!-- FOOTER -->
        @include('frontend.home.partials.footer')
        <!-- / END FOOTER -->
        <!-- SCROLLTOP -->
        <div style="display: none;" class="scroll-up">
            <a href="#totop">
                <i class="fa fa-angle-double-up"></i>
            </a>
        </div>
        <!-- Javascript files -->
        <script src="{{asset('js/front/jquery-2.js')}}"></script>
        <script src="{{asset('js/front/bootstrap.js')}}"></script>
        <script src="{{asset('js/front/jquery_002.js')}}"></script>
        <script src="{{asset('js/front/jquery_003.js')}}"></script>
        <script src="{{asset('js/front/jquery_006.js')}}"></script>
        <script src="{{asset('js/front/jquery_007.js')}}"></script>
        <script src="{{asset('js/front/jquery_004.js')}}"></script>
        <script src="{{asset('js/front/jquery_005.js')}}"></script>
        <script src="{{asset('js/front/owl.js')}}"></script>
        <script src="{{asset('js/front/imagesloaded.js')}}"></script>
        <script src="{{asset('js/front/isotope.js')}}"></script>
        <script src="{{asset('js/front/packery-mode.js')}}"></script>
        <script src="{{asset('js/front/appear.js')}}"></script>
        <script src="{{asset('js/front/wow.js')}}"></script>
        <script src="{{asset('js/front/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('js/front/jquery.js')}}"></script>
        <script src="{{asset('js/front/js.js')}}"></script>
        <!-- Datatable -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/r-2.2.1/datatables.min.js"></script> 
        
        <script src="{{asset('js/front/main.js')}}"></script>
        <script src="{{asset('js/front/contact.js')}}"></script>
        <script src="{{asset('js/front/jquery.fancybox.pack.js?v=2.1.5')}}"></script>

        <script src="{{ asset('js/sweetalert2.js') }}"></script>

        <!--JS DE FancyProductDesigner-->
        <script src="{{asset('js/front/jquery-ui.min.js')}}"></script>
        <script src="{{asset('vendor/fancy-product-designer/js/fabric.min.js')}}"></script>
        <script src="{{asset('vendor/fancy-product-designer/js/FancyProductDesigner-all.min.js')}}"></script>
        <script src="{{asset('js/front/custom.js')}}"></script>
        
        
        @yield('js')

        <script type="text/javascript">
            $(document).ready(function () {
                $(".fancybox").fancybox();
            });
              //DATATABLE
            $(window).ready(function(){
                $('.data-table').DataTable({
                responsive: true,
                "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                    }
                });
                

            })
        </script>

</body>
