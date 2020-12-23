<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
	<title> @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    {{-- CSS From template --}}
    <!-- Fonts and icons -->
	<script src="{{asset('js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{asset('css/fonts.min.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/atlantis.min.css')}}">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('css/demo.css')}}">
	{{-- End CSS From template --}}
	
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
        <div class="wrapper">
			@include('nav.header')
			@include('nav.sidebar')
            <div class="main-panel">
				<div class="content">
					<div class="panel-header bg-primary-gradient">
						<div class="page-inner py-5">
							<div class="d-flex flex-column flex-md-row justify-content-center">
								<div id="infiniteAnimate" class="animated @yield('animeted') infinite">
									<img src="{{asset('img/Deepcolor.png')}}"
									alt="Our Mascot" height="80" width="80">
								</div>
								
								<h4 class="judul text-center">
									@yield('subtitle')
								</h4>
							</div>
						</div>
					</div>
					@yield('content')
					@include('nav.footer')
				</div>
            </div>
        </div>


    {{-- JS From template --}}
    <!--   Core JS Files   -->
	<script src="{{asset('/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('/js/core/popper.min.js')}}"></script>
	<script src="{{asset('/js/core/bootstrap.min.js')}}"></script>

	<!-- jQuery UI -->
	<script src="{{asset('/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


	<!-- Chart JS -->
	<script src="{{asset('/js/plugin/chart.js/chart.min.js')}}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset('/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

	<!-- Chart Circle -->
	<script src="{{asset('/js/plugin/chart-circle/circles.min.js')}}"></script>

	<!-- Datatables -->
	<script src="{{asset('/js/plugin/datatables/datatables.min.js')}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset('/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{asset('/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

	<!-- Sweet Alert -->
	<script src="{{asset('/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

	<!-- Atlantis JS -->
	<script src="{{asset('/js/atlantis.min.js')}}"></script>

	<script src="{{asset('/js/voting.js')}}"></script>

	{{-- 		
	<script>
		$(document).ready( function () {
			$('#tabel1').DataTable();
		} );
	</script> 
	--}}

</body>
</html>
